<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Panggilan Darurat - SPARTA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg'); /* Ganti dengan path atau URL gambar */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }

        /* Header Styling */
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
            color: #e7d918; /* Warna hover untuk tautan di navbar */
        }

        .login-btn {
            background-color: white;
            color: #2a3987;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .login-btn:hover {
            background-color: #e7d918; /* Warna hover untuk tombol login */
            color: white;
        }

        /* Container untuk seluruh halaman */
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Efek transparan */
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2a3987;
        }

        /* Styling untuk kontak darurat */
        .contact-info {
            padding: 20px;
            background-color: rgba(249, 249, 249, 0.9); /* Efek transparan */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .contact-info ul {
            list-style-type: none;
            padding: 0;
        }

        .contact-info li {
            padding: 10px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
        }

        .contact-info li h3 {
            margin: 0;
            color: #2a3987;
        }

        .contact-info li p {
            margin: 5px 0;
            color: #333;
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
    </style>
</head>
<body>
  <!-- Header -->
  <header>
    <h1>SPARTA</h1>
    <nav>
      <ul>
      <li><a href="index.php">Beranda</a></li>
        <li><a href="Berita%20kejahatan.php">Berita Kejahatan</a></li>
        <li><a href="Polsek%20terdekat.php">Polsek Terdekat</a></li>
        <li><a href="Panggilan%20Darurat.php">Kontak Darurat</a></li>
        <li><a href="Pelaporan%20Kejahatan.php">Laporkan</a></li>
        <li><a href="Tentang%20Kami.php">Tentang Kami</a></li>
      </ul>
    </nav>
    <button class="login-btn" onclick="window.location.href='login.php'">Login</button>
  </header>

    <div class="container">
        <h2>Panggilan Darurat</h2>

        <!-- Informasi Kontak Darurat -->
        <div class="contact-info">
            <ul>
                <li>
                    <h3>Polisi</h3>
                    <p>Nomor: 110</p>
                </li>
                <li>
                    <h3>Pemadam Kebakaran (DAMKAR)</h3>
                    <p>Nomor: 113</p>
                </li>
                <li>
                    <h3>Ambulans</h3>
                    <p>Nomor: 118 / 119</p>
                </li>
                <li>
                    <h3>Panggilan Darurat 112</h3>
                    <p>Nomor: 112 (Bisa untuk semua keadaan darurat: polisi, pemadam kebakaran, ambulans)</p>
                </li>
            </ul>
        </div>

        <!-- Tombol kembali ke Beranda -->
        <a href="beranda.html" class="back-btn">Kembali ke Beranda</a>
    </div>

</body>
</html>
