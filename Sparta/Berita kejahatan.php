<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Kejahatan</title>
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
         .login-btn:hover{
        background-color: #e7d918;
        color: white;
        }

        .news-section {
            padding: 20px;
        }
        .highlight-news {
            display: flex;
            background-color: white;
            margin-bottom: 40px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .highlight-image img {
            width: 400px;
            height: auto;
        }
        .highlight-content {
            padding: 20px;
        }
        .highlight-content .date {
            color: #888;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .highlight-content h2 {
            font-size: 24px;
            margin: 0;
        }
        .highlight-content p {
            color: #555;
            font-size: 16px;
            margin: 20px 0;
        }
        .highlight-content a {
            color: #2a3987;
            text-decoration: none;
            font-weight: bold;
        }
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .news-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .news-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
        }
        .news-card .date {
            color: #888;
            font-size: 14px;
            margin-top: 10px;
        }
        .news-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .news-card p {
            color: #555;
            font-size: 14px;
        }
        .news-card a {
            color: #2a3987;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        /* Efek Hover */
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        .pagination {
            text-align: center;
            margin-top: 30px;
        }
        .pagination a {
            color: #2a3987;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
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
        <button class="login-btn login-btn-hover" onclick="window.location.href='login.php'">Login</button>
      </header>
    <!-- Berita Section -->
    <section class="news-section">
        <div class="highlight-news">
            <div class="highlight-image">
                <img src="./image/00-news-highlighted.png" alt="Highlight News">
            </div>
            <div class="highlight-content">
                <p class="date">01 September 2020</p>
                <h2>Kesal Dengan DS, Karyawan Outsourcing Umbar Info DS di Twitter.</h2>
                <p>FPH diduga telah melakukan aksi ilegal terhadap database PTX, menyalahgunakan kewenangannya untuk mendapatkan data pribadi seseorang...</p>
                <a href="artikel 1.php">Baca Selengkapnya</a>
            </div>
        </div>
        <!-- Grid Berita Kejahatan -->
        <div class="news-grid">
            <div class="news-card">
                <img src="./image/news-2.png" alt="Kasus Pencurian">
                <p class="date">01 Sep 2020</p>
                <h3>Kasus Pencurian di Jakarta Selatan</h3>
                <p>Polisi berhasil menangkap pelaku pencurian dengan barang bukti lengkap...</p>
                <a href="artikel-2.php">Baca Selengkapnya</a>
            </div>
            <div class="news-card">
                <img src="./image/download.jpeg" alt="Penipuan Online">
                <p class="date">29 Agu 2020</p>
                <h3>Kasus Penipuan Online Meningkat di Indonesia</h3>
                <p>Jumlah kasus penipuan online di Indonesia meningkat pesat dalam tiga bulan terakhir...</p>
                <a href="artikel-3.pgp">Baca Selengkapnya</a>
            </div>
            <div class="news-card">
                <img src="./image/download (1).jpeg" alt="Peretasan Situs">
                <p class="date">24 Jul 2020</p>
                <h3>Peretasan Situs Pemerintah, Pelaku Ditangkap</h3>
                <p>Pelaku peretasan situs pemerintah berhasil diamankan oleh pihak kepolisian setelah melakukan aksinya selama 3 bulan...</p>
                <a href="artikel-4.php">Baca Selengkapnya</a>
            </div>
            <div class="news-card">
                <img src="./image/download (5).jpeg" alt="Penyelundupan Narkoba">
                <p class="date">23 Jan 2020</p>
                <h3>Penyelundupan Narkoba Jaringan Internasional Terungkap</h3>
                <p>Penyelundupan narkoba jaringan internasional berhasil diungkap oleh aparat penegak hukum di pelabuhan...</p>
                <a href="artikel-5.php">Baca Selengkapnya</a>
            </div>
            <div class="news-card">
                <img src="./image/download (2).jpeg" alt="Pembobolan Data">
                <p class="date">15 Jan 2020</p>
                <h3>Pembobolan Data Pribadi, Hati-hati Berbagi Informasi di Media Sosial</h3>
                <p>Kasus pembobolan data pribadi di media sosial meningkat, pengguna diimbau untuk lebih berhati-hati dalam membagikan informasi...</p>
                <a href="artikel-6.php">Baca Selengkapnya</a>
            </div>
        </div>
        <!-- Pagination -->
        <div class="pagination">
            <a href="#">&laquo; Prev</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Next &raquo;</a>
        </div>
    </section>
</body>
</html>
