<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.min.css" rel="stylesheet">
    <title>SPARTA - Register</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('./image/Background image.png');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            background-color: rgba(42, 57, 135, 0.8);
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: white;
            margin-bottom: 20px;
        }

        .swal2-container {
            backdrop-filter: blur(5px);
            /*efek blur */
        }

        .swal2-container {
            background-color: rgba(0, 0, 0, 1) !important;
            /* Menggelapkan background */
        }

        .swal2-popup {
            margin-top: 0 !important;
            /* modal berada di tengah */
        }

        .register-form {
            display: flex;
            flex-direction: column;
        }

        .register-form input {
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            width: 100%;
        }

        .register-form button {
            padding: 10px;
            background-color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #2a3987;
        }

        .register-form button:hover {
            background-color: #dbdbdb;
        }

        p {
            color: white;
        }

        a {
            color: #00aaff;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Daftar</h1>
        <form class="register-form" action="" method="POST">
            <input type="text" name="nama" placeholder="Nama Lengkap" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="nomer" placeholder="Nomer" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="register">Daftar</button>
        </form>
        <p>Sudah Punya Akun? <a href="Login.php">Login Disini</a></p>
    </div>
    <?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nomer = $_POST['nomer'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Cek apakah email atau nomor sudah ada di database
        $checkEmailQuery = "SELECT * FROM data_pengguna WHERE email_png='$email' OR nomer_png='$nomer'";
        $result = mysqli_query($db, $checkEmailQuery);

        if (mysqli_num_rows($result) > 0) {
            $response = "Registrasi gagal. Email atau Nomer sudah terdaftar.";
            $alertType = "error";
        } else {
            $query = mysqli_query($db, "SELECT max(id_png) as kodeTerbesar FROM data_pengguna");
            $data = mysqli_fetch_array($query);
            $kode = $data['kodeTerbesar'];

            $urutan = (int) substr($kode, 3, 3);
            $urutan++;
            $huruf = "PNG";
            $kode = $huruf . sprintf("%03s", $urutan);
            $id = $kode;

            // Hash the password for security
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Query untuk memasukkan data ke dalam database
            $insert = "INSERT INTO data_pengguna (id_png, nama_png, nomer_png, email_png, password_png) 
                       VALUES ('$id', '$nama', '$nomer', '$email', '$hashedPassword')";

            if ($db->query($insert) === TRUE) {
                $response = "Registrasi berhasil! Silakan login.";
                $alertType = "success";
                echo "<script>
                        Swal.fire({
                            title: 'Notifikasi',
                            text: '" . addslashes($response) . "',
                            icon: '" . $alertType . "',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'login.php';
                            }
                        });
                      </script>";
                exit;
            } else {
                $response = "Registrasi gagal. Kesalahan: " . $db->error;
                $alertType = "error";
            }
        }

        // Tampilkan alert dengan pesan
        echo "<script>
                Swal.fire({
                    title: 'Notifikasi',
                    text: '" . addslashes($response) . "',
                    icon: '" . $alertType . "',
                    confirmButtonText: 'OK',
                    
                });
              </script>";
    }
    ?>
</body>

</html>