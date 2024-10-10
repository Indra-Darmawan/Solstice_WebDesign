<?php
    // Include file koneksi ke database
    include 'koneksi.php';
    session_start(); // Mulai session

    // Mengecek apakah pengguna sudah login
    if (!isset($_SESSION['id'])) {
        // Jika belum login, redirect ke halaman login
        header("Location: login.php");
        exit;
    }

    // Mengambil ID pengguna dari session
    $userId = $_SESSION['id'];

    // Query untuk mengambil data pengguna berdasarkan ID
    $query = "SELECT * FROM data_pengguna WHERE ID_PNG='$userId'";
    $result = mysqli_query($db, $query);

    // Mengecek apakah query berhasil dan ada hasilnya
    if ($result && mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result); // Mengambil data pengguna
    } else {
        // Jika tidak ada data pengguna
        $userData = null;
        $errorMessage = "Data pengguna tidak ditemukan.";
    }

    // Simpan laporan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dapatkan nilai dari form
        $alamat = $_POST['alamat'];
        $pesan = $_POST['pesan'];

        // Mendapatkan kode ID terbesar dan membuat ID baru
        $query = mysqli_query($db, "SELECT max(id_lp) as kodeTerbesar FROM data_laporan");
        $data = mysqli_fetch_array($query);
        $kode = $data['kodeTerbesar'];

        $urutan = (int) substr($kode, 3, 3);
        $urutan++;
        $huruf = "LPR";
        $kode = $huruf . sprintf("%03s", $urutan);

        $id = $kode;

        // Mengunggah file PDF
        $targetDir = "laporan/"; // Folder tempat file akan diunggah

        // Cek apakah folder uploads sudah ada, jika tidak buat folder
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true); // Buat folder dengan izin 0777
        }

        // Mengubah nama file PDF
        if (isset($_FILES["file"])) {
            $fileName = $_FILES["file"]["name"]; // Nama asli file
            $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Mendapatkan tanggal saat ini dalam format YYYY-MM-DD
            $currentDate = date("Y-m-d"); // Menggunakan format YYYY-MM-DD untuk database

            // Menghasilkan nama file baru
            $newFileName = "Laporan_" . $id . "_" . str_replace("-", "", $currentDate) . "_" . uniqid() . "." . $fileType; // Contoh: Laporan_LPR001_09102024_605c7a7f4c5c7.pdf
            $targetFile = $targetDir . $newFileName;

            $uploadOk = 1;

            // Cek apakah file adalah PDF
            if ($fileType != "pdf") {
                $response = "Maaf, hanya file PDF yang diperbolehkan.";
                $uploadOk = 0;
            }

            // Cek ukuran file
            if ($_FILES["file"]["size"] > 20971520) { // 20 MB = 20971520 bytes
            $response = "Maaf, file terlalu besar.";
            $uploadOk = 0;
            }

            // Jika semua cek lulus, coba untuk mengunggah file
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                    // Query untuk memasukkan data ke dalam database
                    $insert = "INSERT INTO data_laporan (id_lp, id_png, alamat_lp, pesan_lp, lamp_lp, tanggal_lp) 
                               VALUES ('$id', '$userId', '$alamat', '$pesan', '$newFileName', '$currentDate')";

                    if ($db->query($insert) === TRUE) {
                        $response = "Data berhasil disimpan.";
                        $alertType = "success"; // Set type to success
                    } else {
                        $response = "Data gagal disimpan. Kesalahan: " . $db->error;
                        $alertType = "error"; // Set type to error
                    }
                } else {
                    $response = "Maaf, terjadi kesalahan saat mengunggah file.";
                    $alertType = "error"; // Set type to error
                }
            } else {
                $alertType = "error"; // Set type to error if upload failed
            }
        } else {
            $response = "File tidak diunggah.";
            $alertType = "error"; // Set type to error
        }

        // Tampilkan alert dengan pesan
        echo "<script>showAlert('" . addslashes($response) . "', '$alertType');</script>";
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.min.css" rel="stylesheet">
  <title>SPARTA - Pelaporan Kejahatan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    /* Header */
    header {
      background-color: #2a3987;
      color: white;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      margin: 0;
      font-size: 24px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 20px;
    }

    nav ul li {
      display: inline;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #e7d918;
      /* Warna hover untuk tautan di navbar */
    }

    .Akun-Saya-btn {
      background-color: white;
      color: #2a3987;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
    }

    .Akun-Saya-btn:hover {
      background-color: #e7d918;
      /* Warna hover untuk tombol login */
      color: white;
    }


    /* Report Section */
    .report-section {
      margin: 40px auto;
      padding: 20px;
      background-color: white;
      width: 60%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    h2 {
      margin-bottom: 20px;
      color: #2a3987;
    }

    form {
      display: grid;
      gap: 15px;
    }

    label {
      font-weight: bold;
    }

    input,
    textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
    }

    textarea {
      resize: none;
      height: 100px;
    }

    button {
      background-color: #2a3987;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #1c2a67;
    }

    /* Footer */
    footer {
      background-color: #2a3987;
      color: white;
      padding: 20px;
      text-align: center;
    }

    footer p {
      margin: 0;
      font-size: 14px;
    }
  </style>

</head>

<body>
  <!-- Header -->
  <header>
    <h1>SPARTA</h1>
    <nav>
      <ul>
        <li><a href="berandaLogin.php">Beranda</a></li>
          <li><a href="Berita%20kejahatanLogin.php">Berita Kejahatan</a></li>
          <li><a href="Polsek%20terdekatLogin.php">Polsek Terdekat</a></li>
          <li><a href="Panggilan%20DaruratLogin.php">Kontak Darurat</a></li>
          <li><a href="Pelaporan%20KejahatanLogin.php">Laporkan</a></li>
          <li><a href="Tentang%20KamiLogin.php">Tentang Kami</a></li>
      </ul>
    </nav>
    <button class="Akun-Saya-btn Akun-Saya-btn:hover" onclick="window.location.href='akun saya.php'">akun saya</button>
  </header>

  <section class="report-section">
    <h2>Pelaporan Aksi Kejahatan</h2>
    <p>
      Untuk membantu kami menyelidiki kasus aksi kejahatan secara menyeluruh, mohon berikan informasi yang lengkap.
    </p>
    <form method="post" action="" enctype="multipart/form-data">
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap anda"
        value="<?= isset($userData) ? htmlspecialchars($userData['NAMA_PNG']) : 'Tidak ada data' ?>" required readonly>

      <label for="alamat">Alamat</label>
      <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat anda" required>

      <label for="telepon">Nomor Telepon</label>
      <input type="nomer" id="nomer" name="nomer" placeholder="Masukkan nomor telepon anda"
        value="<?= isset($userData) ? htmlspecialchars($userData['NOMER_PNG']) : 'Tidak ada data' ?>" required readonly>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email anda"
        value="<?= isset($userData) ? htmlspecialchars($userData['EMAIL_PNG']) : 'Tidak ada data' ?>" required readonly>

      <label for="pesan">Pesan</label>
      <textarea id="pesan" name="pesan" placeholder="Silahkan isi detail kasus kejahatan yang ingin Anda laporkan"
        required></textarea>

      <label for="lampiran">Lampiran <span style="color: red;">*</span>(wajib pdf)</label>
      <input type="file" name="file" accept=".pdf" required>
      <p>Ukuran file PDF maksimal 20 MB.</p>

      <button type="submit" id="submit-btn">Kirim</button>
    </form>
    
    <script>
        // Fungsi untuk menampilkan alert setelah proses
        function showAlert(message, type) {
            Swal.fire({
                title: 'Notifikasi',
                text: message,
                icon: type, // Use the type from the parameter
                confirmButtonText: 'OK',
            }).then(() => {
                // Optionally, you could refresh the page or redirect here if needed
                // location.reload(); // Uncomment if you want to reload after alert
            });
        }

        // Mengecek jika ada pesan alert dari PHP dan menampilkannya
        <?php if (isset($response)) : ?>
            showAlert("<?= addslashes($response) ?>", "<?= $alertType ?>");
        <?php endif; ?>
    </script>
  </section>

  <footer>
    <p>&copy; 2024 SPARTA - Sistem Pelaporan Aksi dan Respons Terpadu Aman</p>
  </footer>


</body>

</html>