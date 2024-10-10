<?php
include 'koneksi.php';
session_start();

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

// Update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dapatkan nilai dari form
    $email = $_POST['emailBaru'];
    $nomer = $_POST['nomerBaru'];

    // Query untuk memperbarui data di dalam database
    $update = "UPDATE data_pengguna SET email_png='$email', nomer_png='$nomer' WHERE ID_PNG='$userId'";

    // Eksekusi query dan periksa apakah berhasil
    if ($db->query($update) === TRUE) {
        $response = "Data berhasil diperbarui";
        $alertType = "success"; // Set type to success
    } else {
        $response = "Data gagal diperbarui. Kesalahan: " . $db->error;
        $alertType = "error"; // Set type to error
    }

    // Tampilkan alert dengan pesan
    echo "<script>showAlert('" . addslashes($response) . "');</script>";
}

// Query untuk mengambil data laporan dari database berdasarkan ID pengguna
$reportQuery = "SELECT * FROM data_laporan WHERE id_png ='$userId'"; // Sesuaikan dengan nama tabel dan kolom
$reportResult = mysqli_query($db, $reportQuery);

// Memastikan query berhasil
if ($reportResult && mysqli_num_rows($reportResult) > 0) {
    $reports = mysqli_fetch_all($reportResult, MYSQLI_ASSOC); // Mengambil semua data laporan
} else {
    $reports = []; // Tidak ada laporan
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Akun Saya - SPARTA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg'); /* Ganti dengan path atau URL gambar */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed; /* Supaya gambar tetap saat scroll */
        }

        /* Header Styling */
        header {
            background-color: rgba(42, 57, 135, 0.9); /* Opacity ditambahkan agar header lebih menonjol di atas background */
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        /* Container untuk seluruh halaman */
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Opacity untuk efek transparan */
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2a3987;
        }

        /* Styling informasi pengguna */
        .user-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            padding: 20px;
            background-color: rgba(249, 249, 249, 0.9); /* Efek transparan */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .user-info div {
            flex: 1;
            margin: 0 20px;
        }

        .user-info h3 {
            color: #2a3987;
            margin-bottom: 10px;
        }

        /* Styling untuk daftar laporan */
        .report-history {
            padding: 20px;
            background-color: rgba(249, 249, 249, 0.9); /* Efek transparan */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .report-history table {
            width: 100%;
            border-collapse: collapse;
        }

        .report-history th, .report-history td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .report-history th {
            background-color: #2a3987;
            color: white;
        }

        .report-history tr:hover {
            background-color: #f1f1f1;
        }

        /* Tombol Kembali ke Beranda */
        .back-btn {
            display: block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #2a3987;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background-color: #e7d918;
            color: #2a3987;
        }

        /* Form styling */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group button {
            display: block;
            padding: 10px 20px;
            background-color: #2a3987;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #e7d918;
            color: #2a3987;
        }
    </style>
 
</head>
<body>
    <!-- Header -->
    <header>
        <h1>SPARTA - Sistem Pengaduan Masyarakat</h1>
    </header>

    <div class="container">
        <h2>Akun Saya</h2>

        <!-- Informasi Pengguna -->
        <div class="user-info">
            <div>
                <h3>Nama Pengguna</h3>
                <p id="userName"><?= isset($userData) ? htmlspecialchars($userData['NAMA_PNG']) : 'Tidak ada data' ?></p>
            </div>
            <div>
                <h3>Email</h3>
                <p id="userEmail"><?= isset($userData) ? htmlspecialchars($userData['EMAIL_PNG']) : 'Tidak ada data' ?></p>
            </div>
            <div>
                <h3>Nomor Telepon</h3>
                <p id="userPhone"><?= isset($userData) ? htmlspecialchars($userData['NOMER_PNG']) : 'Tidak ada data' ?></p>
            </div>
        </div>

        <!-- Form untuk mengganti Email dan Nomor Telepon -->
        <form method="post" action="">
        <div class="form-group">
            <label for="newEmail">Ganti Email:</label>
            <input type="email" name="emailBaru" id="emailBaru" placeholder="Masukkan email baru">
        </div>

        <div class="form-group">
            <label for="newPhone">Ganti Nomor Telepon:</label>
            <input type="number"  name="nomerBaru" id="nomerBaru" placeholder="Masukkan nomor telepon baru">
        </div>

        <div class="form-group">
            <button id="saveBtn" type="submit">Simpan Perubahan</button>
        </div>
        </form>

        <!-- Histori Laporan -->
        <div class="report-history">
            <h3>Histori Laporan</h3>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Laporan</th>
                        <th>Tanggal</th>
                        <th>cek laporan</th>
                   
                    </tr>
                </thead>
                <tbody id="reportTable">
                    <?php if (empty($reports)): ?>
                        <tr>
                            <td colspan="4">Tidak ada laporan yang tersedia.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($reports as $index => $report): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= htmlspecialchars($report['LAMP_LP']) ?></td>
                                <td><?= htmlspecialchars($report['TANGGAL_LP']) ?></td>
                                <td>
                                <a href="laporan/<?= htmlspecialchars($report['LAMP_LP']) ?>" target="_blank" class="back-btn">Lihat PDF</a>
                                </td>
                               
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Tombol kembali ke Beranda -->
        <a href="berandaLogin.php" class="back-btn">Kembali ke Beranda</a>
    </div>

    <!-- Script untuk Memuat Data Pengguna dan Laporan -->
    <script>
        // Fungsi untuk menampilkan alert setelah proses
       function showAlert(message, type) {
            Swal.fire({
                title: 'Notifikasi',
                text: message,
                icon: type, // Use the type from the parameter
                confirmButtonText: 'OK',
                
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke URL yang diinginkan
                    window.location.href = 'akun saya.php'; // Ganti dengan URL yang diinginkan
                }
            });
        }
        // Mengecek jika ada pesan alert dari PHP dan menampilkannya
        <?php if (isset($response)) : ?>
            showAlert("<?= addslashes($response) ?>", "<?= $alertType ?>");
        <?php endif; ?>
    </script>
</body>
</html>
