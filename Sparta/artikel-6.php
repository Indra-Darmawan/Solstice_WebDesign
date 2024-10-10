<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kasus Pembobolan Data Pribadi</title>
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
                <img src="./image/download (2).jpeg" alt="Article Header Image" class="header-image">
                <h1 id="article-title">Kasus Pembobolan Data Pribadi, Hati-hati Berbagi Informasi di Media Sosial</h1>
                <p class="date" id="article-date">10 Oktober 2024</p>
            </div>
            <div class="article-content" id="article-content">
                <p>
                    Jakarta, 10 Oktober 2024 – Kasus pembobolan data pribadi di media sosial meningkat dalam beberapa bulan terakhir, 
                    mengingat banyaknya pengguna yang kurang berhati-hati dalam membagikan informasi pribadi mereka. Hal ini 
                    menyebabkan para penjahat siber memanfaatkan celah tersebut untuk mendapatkan data sensitif.
                </p>
                <p>
                    Menurut data yang dirilis oleh Badan Siber dan Sandi Negara (BSSN), terdapat peningkatan 40% dalam jumlah 
                    laporan mengenai kebocoran data pribadi melalui platform media sosial. "Kami mendapati bahwa banyak pengguna 
                    yang tidak menyadari risiko berbagi informasi seperti nomor telepon, alamat, dan data pribadi lainnya," 
                    ungkap Kepala BSSN, H. Ahmad Husein.
                </p>
                <p>
                    Pengguna diimbau untuk lebih berhati-hati dan memperhatikan pengaturan privasi di akun media sosial mereka. 
                    "Kami menyarankan agar pengguna hanya membagikan informasi yang diperlukan dan menghindari mengungkapkan 
                    detail yang dapat memudahkan penjahat siber untuk melakukan tindakan kriminal," tambah H. Ahmad.
                </p>
                <p>
                    Beberapa langkah pencegahan yang dapat diambil oleh pengguna termasuk mengatur profil menjadi privat, 
                    tidak mengklik tautan mencurigakan, serta rutin mengganti kata sandi akun. Dengan kesadaran yang lebih tinggi, 
                    diharapkan kasus pembobolan data pribadi dapat ditekan.
                </p>
                <p>
                    Dalam beberapa kasus, pelanggaran ini juga dapat menyebabkan kerugian finansial, pencurian identitas, 
                    dan dampak buruk lainnya bagi korban. Oleh karena itu, penting bagi setiap pengguna media sosial untuk 
                    lebih waspada dan melindungi data pribadi mereka.
                </p>
            </div>
        </div>
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Berita Lainnya</h3>
            <ul id="related-articles">
                <li>
                    <span class="date">5 Okt 2024</span>
                    <a href="#">Kasus Pembobolan Data Pribadi di E-commerce...</a>
                </li>
                <li>
                    <span class="date">1 Okt 2024</span>
                    <a href="#">Peningkatan Kejahatan Siber di Kalangan Remaja...</a>
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
