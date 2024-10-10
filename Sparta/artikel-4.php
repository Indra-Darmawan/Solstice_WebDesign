<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kasus Peretasan Situs Pemerintah, Pelaku Ditangkap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
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
        }
        .main-container {
            display: flex;
            margin: 20px;
        }
        .article-section {
            flex: 3;
            margin-right: 20px;
        }
        .article-header {
            text-align: center;
            margin: 20px 0;
        }
        .header-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }
        .date {
            color: gray;
            font-size: 0.9rem;
        }
        .article-content {
            margin-bottom: 40px;
            background: white;
            padding: 20px;
            border-radius: 5px;
            text-align: justify;
        }
        .article-content p {
            margin-bottom: 15px;
        }
        .sidebar {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 5px;
        }
        .sidebar h3 {
            margin-bottom: 20px;
            font-size: 1.2rem;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 15px;
        }
        .sidebar ul li .date {
            font-size: 0.8rem;
            color: gray;
            display: block;
        }
        .sidebar ul li a {
            color: #333;
            text-decoration: none;
            font-size: 1rem;
        }
        .sidebar ul li a:hover {
            color: #e7d918;
        }
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
                <li><a href="Beranda.php">Beranda</a></li>
                <li><a href="Berita%20kejahatan.php">Berita Kejahatan</a></li>
                <li><a href="Polsek%20terdekat.php">Polsek Terdekat</a></li>
                <li><a href="Panggilan%20Darurat.php">Kontak Darurat</a></li>
                <li><a href="Pelaporan%20Kejahatan.php">Laporkan</a></li>
                <li><a href="Tentang%20Kami.php">Tentang Kami</a></li>
            </ul>
        </nav>
    </header>
    <!-- Main Section -->
    <div class="main-container">
        <!-- Article Section -->
        <div class="article-section">
            <div class="article-header">
                <img src="./image/download (1).jpeg" alt="Article Header Image" class="header-image">
                <h1 id="article-title">Kasus Peretasan Situs Pemerintah, Pelaku Ditangkap</h1>
                <p class="date" id="article-date">10 Oktober 2024</p>
            </div>
            <div class="article-content" id="article-content">
                <p>
                    Jakarta, 10 Oktober 2024 – Pelaku peretasan situs pemerintah berhasil diamankan oleh pihak kepolisian setelah 
                    melakukan aksinya selama 3 bulan. Tim dari Unit Cyber Crime Polda Metro Jaya menangkap pelaku di sebuah apartemen 
                    di kawasan Jakarta Timur pada Rabu malam (9/10).
                </p>
                <p>
                    Pelaku yang berinisial AH (27) ini diketahui telah meretas beberapa situs pemerintahan sejak Juli 2024, dan berhasil 
                    mencuri data penting serta merusak sistem keamanan situs-situs tersebut. Aksinya menyebabkan kerugian yang signifikan 
                    dan mengganggu operasional beberapa layanan publik yang dikelola oleh pemerintah.
                </p>
                <p>
                    Kapolda Metro Jaya, Irjen Pol. Rudi Prasetyo, menyampaikan dalam konferensi pers bahwa pelaku menggunakan teknik 
                    peretasan yang cukup canggih untuk mengakses sistem-sistem pemerintahan. "Kami berhasil mengidentifikasi pelaku 
                    setelah melakukan investigasi menyeluruh terhadap jejak digitalnya. Pelaku sangat berhati-hati, namun tim kami 
                    berhasil mengungkap identitasnya dan menangkapnya dengan bukti yang kuat," ujar Irjen Pol. Rudi.
                </p>
                <p>
                    Dari tangan pelaku, polisi menyita beberapa perangkat elektronik, termasuk laptop dan server mini yang digunakan 
                    untuk melakukan aksinya. Selain itu, ditemukan juga beberapa data hasil peretasan yang tersimpan di perangkat 
                    tersebut.
                </p>
                <p>
                    Saat ini pelaku sedang menjalani proses pemeriksaan lebih lanjut di Polda Metro Jaya. Polisi juga sedang menyelidiki 
                    apakah pelaku bekerja sendiri atau merupakan bagian dari sindikat peretasan yang lebih besar.
                </p>
                <p>
                    Pelaku dijerat dengan Undang-Undang tentang Informasi dan Transaksi Elektronik (ITE) serta Undang-Undang tentang 
                    Keamanan Siber, dengan ancaman hukuman penjara hingga 10 tahun.
                </p>
            </div>
        </div>
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Berita Lainnya</h3>
            <ul id="related-articles">
                <li>
                    <span class="date">5 Okt 2024</span>
                    <a href="#">Kejahatan Siber Menargetkan Institusi Publik...</a>
                </li>
                <li>
                    <span class="date">30 Sep 2024</span>
                    <a href="#">Penipuan Online di Indonesia Meningkat...</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <p>© 2023 SPARTA. All rights reserved.</p>
    </footer>
</body>
</html>
