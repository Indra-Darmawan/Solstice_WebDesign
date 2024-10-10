<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kasus Narkoba Jaringan Internasional Terungkap</title>
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
                <img src="./image/download (5).jpeg" alt="Article Header Image" class="header-image">
                <h1 id="article-title">Kasus Narkoba Jaringan Internasional Terungkap</h1>
                <p class="date" id="article-date">10 Oktober 2024</p>
            </div>
            <div class="article-content" id="article-content">
                <p>
                    Jakarta, 10 Oktober 2024 – Penyelundupan narkoba jaringan internasional berhasil diungkap oleh aparat penegak hukum 
                    di pelabuhan. Dalam operasi yang dilakukan pada Selasa (9/10), pihak berwenang berhasil menyita barang bukti 
                    narkoba dengan total berat lebih dari 100 kilogram yang tersembunyi di dalam kontainer.
                </p>
                <p>
                    Kapolri, Jenderal Listyo Sigit Prabowo, mengungkapkan bahwa narkoba tersebut diduga merupakan bagian dari jaringan 
                    internasional yang beroperasi di beberapa negara. “Kami mendapatkan informasi dari intelijen mengenai 
                    penyelundupan ini dan segera melakukan penyelidikan. Penangkapan ini adalah hasil kerja keras tim yang 
                    bekerja tanpa lelah,” kata Jenderal Listyo dalam konferensi pers.
                </p>
                <p>
                    Selain menyita narkoba, polisi juga menangkap dua orang yang diduga sebagai kurir dalam penyelundupan ini. Keduanya 
                    saat ini sedang menjalani pemeriksaan intensif untuk mengungkap jaringan lebih besar yang terlibat.
                </p>
                <p>
                    Jenderal Listyo menegaskan komitmen pihak kepolisian dalam memberantas narkoba dan menindak tegas para pelaku 
                    penyelundupan. “Kami tidak akan mentolerir tindakan kriminal ini dan akan terus meningkatkan koordinasi dengan 
                    lembaga internasional untuk mengatasi masalah ini,” tambahnya.
                </p>
                <p>
                    Dengan terungkapnya kasus ini, diharapkan masyarakat dapat lebih waspada terhadap bahaya narkoba dan turut 
                    berpartisipasi dalam upaya pencegahan penyalahgunaan narkoba di lingkungan mereka.
                </p>
            </div>
        </div>
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Berita Lainnya</h3>
            <ul id="related-articles">
                <li>
                    <span class="date">5 Okt 2024</span>
                    <a href="#">Penyelidikan Kasus Narkoba Meningkat di Indonesia...</a>
                </li>
                <li>
                    <span class="date">1 Okt 2024</span>
                    <a href="#">Polisi Ungkap Jaringan Narkoba Lokal...</a>
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
