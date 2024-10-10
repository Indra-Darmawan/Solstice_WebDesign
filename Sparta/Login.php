<?php
include 'koneksi.php';
session_start(); // Mulai session

// Variabel untuk menampung hasil
$response = '';
$alertType = 'info'; // Default alert type

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dapatkan nilai dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah email ada di database
    $checkEmailQuery = "SELECT * FROM data_pengguna WHERE email_png='$email'";
    $result = mysqli_query($db, $checkEmailQuery);

    if ($result && mysqli_num_rows($result) > 0) {
        // Jika email ditemukan, ambil data pengguna
        $data = mysqli_fetch_assoc($result);
        $hashedPassword = $data['PASSWORD_PNG'];
        $userId = $data['ID_PNG'];

        // Verifikasi password
        if (password_verify($password, $hashedPassword)) {
            // Jika password benar, simpan data pengguna di session
            $_SESSION['id'] = $userId; // Simpan ID pengguna di session

            // Redirect to the berandaLogin page
            header("Location: berandaLogin.php");
            exit; // Halaman tujuan setelah login
        } else {
            // Jika password salah
            $response = "Login gagal. Password yang Anda masukkan salah.";
            $alertType = "error"; // Set type to error
        }
    } else {
        // Jika email tidak ditemukan
        $response = "Akun dengan email '$email' tidak ditemukan.";
        $alertType = "error"; // Set type to error
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SweetAlert CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.all.min.js"></script>
    <title>SPARTA - Login</title>
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

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .login-form input {
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .login-form button {
            padding: 10px;
            background-color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #2a3987;
        }

        .login-form button:hover {
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
    <script>
        function showAlert(message) {
            alert(message);
        }

        function confirmCreateAccount(message, email) {
            if (confirm(message + "\nApakah Anda ingin membuat akun baru?")) {
                // Jika pengguna setuju, arahkan ke halaman registrasi
                window.location.href = "register.php?email=" + encodeURIComponent(email);
            }
        }

        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>SPARTA</h1>
        <form class="login-form" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Belum Punya Akun? <a href="register.php">Daftar Disini</a></p>
    </div>
    <script>
        // Fungsi untuk menampilkan alert menggunakan SweetAlert
        function showAlert(message, type) {
            Swal.fire({
                title: 'Notifikasi',
                text: message,
                icon: type,
                confirmButtonText: 'OK',
            });
        }

        // Mengecek jika ada pesan alert dari PHP dan menampilkannya
        <?php if (!empty($response)) : ?>
            showAlert("<?= addslashes($response) ?>", "<?= $alertType ?>");
        <?php endif; ?>
    </script>
</body>

</html>