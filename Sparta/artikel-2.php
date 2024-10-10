<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPARTA - Artikel</title>
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
            color: #e7d918; /* Hover color for nav links */
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
            background-color: #e7d918; /* Hover color for login button */
            color: white;
        }
        /* Main Section */
        .main-container {
            display: flex;
            margin: 20px;
        }
        /* Article Section */
        .article-section {
            flex: 3; /* Lebar section artikel */
            margin-right: 20px; /* Spasi antara artikel dan sidebar */
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
            text-align: justify; /* Membuat teks rata kiri kanan */
        }
        .article-content p {
            margin-bottom: 15px; /* Jarak antar paragraf */
        }
        /* Sidebar */
        .sidebar {
            flex: 1; /* Lebar sidebar */
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
            color: #e7d918; /* Hover color for related articles */
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
                <img src="./image/news-2.png" alt="Article Header Image" class="header-image">
                <h1 id="article-title">Polisi Berhasil Tangkap Pelaku Pencurian di Jakarta Selatan dengan Barang Bukti Lengkap</h1>
                <p class="date" id="article-date">10 Oktober 2024</p>
            </div>
            <div class="article-content" id="article-content">
                <p>
                    Jakarta Selatan, 10 Oktober 2024 – Kepolisian Jakarta Selatan berhasil menangkap seorang pelaku pencurian yang telah meresahkan warga di kawasan tersebut. Penangkapan dilakukan setelah tim Reskrim Polres Jakarta Selatan melakukan penyelidikan intensif selama beberapa hari.
                </p>
                <p>
                    Pelaku, yang berinisial AR (32), ditangkap di sebuah rumah kontrakan di daerah Mampang Prapatan pada Rabu malam (9/10). Penangkapan ini berawal dari laporan masyarakat yang kehilangan barang berharga di rumah mereka, termasuk perhiasan, uang tunai, dan perangkat elektronik.
                </p>
                <p>
                    Menurut Kapolres Jakarta Selatan, Kombes Pol. Andi Setiawan, pelaku telah melakukan aksinya di beberapa lokasi berbeda selama beberapa minggu terakhir. “Pelaku cukup lihai dalam mengelabui korbannya, namun berkat kerja keras tim, kami berhasil melacak jejaknya hingga akhirnya menangkapnya bersama barang bukti yang lengkap,” ungkap Kombes Pol. Andi.
                </p>
                <p>
                    Barang bukti yang disita dari pelaku di antaranya adalah satu unit televisi, beberapa laptop, perhiasan emas, serta uang tunai sejumlah puluhan juta rupiah. Selain itu, ditemukan juga alat-alat yang diduga digunakan pelaku untuk membobol rumah-rumah korbannya.
                </p>
                <p>
                    Pelaku saat ini sudah diamankan di Mapolres Jakarta Selatan dan sedang menjalani proses penyidikan lebih lanjut. Polisi juga tengah mendalami kemungkinan adanya keterlibatan pelaku dalam jaringan pencurian yang lebih besar.
                </p>
                <p>
                    “Dengan penangkapan ini, kami berharap masyarakat bisa merasa lebih aman. Kami tetap mengimbau agar warga tetap waspada dan melapor jika melihat aktivitas mencurigakan di lingkungan mereka,” tambah Kombes Pol. Andi.
                </p>
                <p>
                    Pelaku dijerat dengan pasal pencurian dengan pemberatan dan terancam hukuman penjara hingga 7 tahun.
                </p>
            </div>
        </div>
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Berita Lainnya</h3>
            <ul id="related-articles">
                <li>
                    <span class="date">26 Agu 2020</span>
                    <a href="#">Peretasan 1309 situs milik Lembaga Negara...</a>
                </li>
                <li>
                    <span class="date">22 Agu 2020</span>
                    <a href="#">Kasus Pencurian Data Bank oleh Outsourcing...</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <p>© 2023 SPARTA. All rights reserved.</p>
    </footer>
    <!-- JavaScript Section -->
    <script>
        // JavaScript to dynamically update article content
        const articleData = {
            title: "Polisi Berhasil Tangkap Pelaku Pencurian di Jakarta Selatan dengan Barang Bukti Lengkap",
            date: "10 Oktober 2024",
            content: `
                Jakarta Selatan, 10 Oktober 2024 – Kepolisian Jakarta Selatan berhasil menangkap seorang pelaku pencurian yang telah meresahkan warga di kawasan tersebut. 
                Penangkapan dilakukan setelah tim Reskrim Polres Jakarta Selatan melakukan penyelidikan intensif selama beberapa hari.

                Pelaku, yang berinisial AR (32), ditangkap di sebuah rumah kontrakan di daerah Mampang Prapatan pada Rabu malam (9/10). Penangkapan ini berawal dari laporan masyarakat 
                yang kehilangan barang berharga di rumah mereka, termasuk perhiasan, uang tunai, dan perangkat elektronik.

                Menurut Kapolres Jakarta Selatan, Kombes Pol. Andi Setiawan, pelaku telah melakukan aksinya di beberapa lokasi berbeda selama beberapa minggu terakhir. 
                “Pelaku cukup lihai dalam mengelabui korbannya, namun berkat kerja keras tim, kami berhasil melacak jejaknya hingga akhirnya menangkapnya bersama barang bukti yang lengkap,” ungkap Kombes Pol. Andi.

                Barang bukti yang disita dari pelaku di antaranya adalah satu unit televisi, beberapa laptop, perhiasan emas, serta uang tunai sejumlah puluhan juta rupiah. Selain itu, ditemukan juga alat-alat yang 
                diduga digunakan pelaku untuk membobol rumah-rumah korbannya.

                Pelaku saat ini sudah diamankan di Mapolres Jakarta Selatan dan sedang menjalani proses penyidikan lebih lanjut. Polisi juga tengah mendalami kemungkinan adanya keterlibatan pelaku dalam jaringan pencurian yang lebih besar.

                “Dengan penangkapan ini, kami berharap masyarakat bisa merasa lebih aman. Kami tetap mengimbau agar warga tetap waspada dan melapor jika melihat aktivitas mencurigakan di lingkungan mereka,” tambah Kombes Pol. Andi.

                Pelaku dijerat dengan pasal pencurian dengan pemberatan dan terancam hukuman penjara hingga 7 tahun.
            `
        };

        document.getElementById('article-title').innerText = articleData.title;
        document.getElementById('article-date').innerText = articleData.date;
        document.getElementById('article-content').innerText = articleData.content;
    </script>
</body>
</html>
