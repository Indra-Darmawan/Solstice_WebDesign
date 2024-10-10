<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kasus Kejadian Perampokan di Jakarta</title>
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
                <img src="./image/robbery.jpg" alt="Article Header Image" class="header-image">
                <h1 id="article-title">Kasus Kejadian Perampokan di Jakarta, Pelaku Berhasil Ditangkap</h1>
                <p class="date" id="article-date">10 Oktober 2024</p>
            </div>
            <div class="article-content" id="article-content">
                <p>
                    Jakarta, 10 Oktober 2024 – Polisi berhasil menangkap pelaku perampokan di sebuah minimarket di Jakarta Barat 
                    setelah terjadi kejar-kejaran sengit. Kejadian ini terjadi pada sore hari saat minimarket masih ramai oleh 
                    pembeli.
                </p>
                <p>
                    Menurut saksi mata, pelaku memasuki minimarket dengan wajah tertutup dan langsung mengancam kasir dengan senjata. 
                    Dalam keadaan panik, kasir menyerahkan uang tunai yang ada di dalam kasir. 
                </p>
                <p>
                    Namun, aksi pelaku tidak berlangsung lama, karena polisi yang mendapatkan laporan segera menuju lokasi dan 
                    melakukan pengejaran. Kejar-kejaran terjadi di jalanan Jakarta yang padat, namun polisi berhasil menghentikan 
                    pelaku di dekat lokasi kejadian.
                </p>
                <p>
                    "Kami mengimbau masyarakat untuk tetap waspada dan segera melapor jika melihat aktivitas mencurigakan," 
                    ujar Kapolres Jakarta Barat. Pelaku kini dalam proses penyidikan dan diharapkan akan dikenakan hukuman berat 
                    atas tindakannya.
                </p>
            </div>
        </div>
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Berita Lainnya</h3>
            <ul id="related-articles">
                <li>
                    <span class="date">5 Okt 2024</span>
                    <a href="#">Kasus Pencurian di Rumah Kosong...</a>
                </li>
                <li>
                    <span class="date">1 Okt 2024</span>
                    <a href="#">Peningkatan Kejahatan Jalanan di Jakarta...</a>
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
