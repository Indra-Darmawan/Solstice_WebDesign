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
                <img src="./image/download.jpeg" alt="Article Header Image" class="header-image">
                <h1 id="article-title">Kasus Penipuan Online Meningkat di Indonesia</h1>
                <p class="date" id="article-date">10 Oktober 2024</p>
            </div>
            <div class="article-content" id="article-content">
                <p>
                    Jakarta, 10 Oktober 2024 – Jumlah kasus penipuan online di Indonesia meningkat pesat dalam tiga bulan terakhir. 
                    Berdasarkan laporan dari pihak kepolisian, terdapat lonjakan signifikan dalam jumlah korban yang melaporkan 
                    kehilangan uang akibat penipuan yang dilakukan secara online, baik melalui platform e-commerce maupun media sosial.
                </p>
                <p>
                    Kepala Biro Penerangan Masyarakat (Karopenmas) Mabes Polri, Brigjen Pol. Yusuf Setiawan, menyatakan bahwa 
                    kasus penipuan online semakin berkembang seiring dengan meningkatnya penggunaan teknologi digital di Indonesia. 
                    "Penipuan online sekarang lebih canggih dan banyak menggunakan metode baru untuk menipu korban, termasuk teknik phishing, 
                    malware, dan rekayasa sosial," ujarnya.
                </p>
                <p>
                    Dari data yang diperoleh, mayoritas korban adalah pengguna e-commerce dan aplikasi pinjaman online. Penipu seringkali 
                    menawarkan harga produk yang sangat murah atau memberikan tawaran investasi dengan keuntungan tinggi, sehingga banyak orang tertarik dan menjadi korban.
                </p>
                <p>
                    Pihak kepolisian bekerja sama dengan penyedia layanan digital dan platform media sosial untuk menelusuri dan menangkap para pelaku. 
                    Namun, dengan kecanggihan teknologi yang terus berkembang, tantangan untuk menindak para pelaku juga semakin besar.
                </p>
                <p>
                    "Kami mengimbau masyarakat untuk lebih berhati-hati dalam melakukan transaksi online dan jangan mudah tergiur dengan tawaran yang terlalu bagus untuk 
                    menjadi kenyataan. Selalu pastikan keaslian penjual atau platform sebelum melakukan transaksi," tambah Brigjen Pol. Yusuf.
                </p>
                <p>
                    Penipuan online di Indonesia dijerat dengan pasal tentang kejahatan siber, yang dapat mengancam para pelaku dengan hukuman penjara hingga 6 tahun dan denda maksimal Rp 1 miliar.
                </p>
            </div>
        </div>
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Berita Lainnya</h3>
            <ul id="related-articles">
                <li>
                    <span class="date">30 Sep 2024</span>
                    <a href="#">Kasus Phishing di Platform Sosial Media Meningkat...</a>
                </li>
                <li>
                    <span class="date">25 Sep 2024</span>
                    <a href="#">Polisi Ungkap Sindikat Penipuan Online...</a>
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
            title: "Kasus Penipuan Online Meningkat di Indonesia",
            date: "10 Oktober 2024",
            content: `
                Jakarta, 10 Oktober 2024 – Jumlah kasus penipuan online di Indonesia meningkat pesat dalam tiga bulan terakhir. 
                Berdasarkan laporan dari pihak kepolisian, terdapat lonjakan signifikan dalam jumlah korban yang melaporkan kehilangan uang 
                akibat penipuan yang dilakukan secara online, baik melalui platform e-commerce maupun media sosial.

                Kepala Biro Penerangan Masyarakat (Karopenmas) Mabes Polri, Brigjen Pol. Yusuf Setiawan, menyatakan bahwa 
                kasus penipuan online semakin berkembang seiring dengan meningkatnya penggunaan teknologi digital di Indonesia. 
                "Penipuan online sekarang lebih canggih dan banyak menggunakan metode baru untuk menipu korban, termasuk teknik phishing, 
                malware, dan rekayasa sosial," ujarnya.

                Dari data yang diperoleh, mayoritas korban adalah pengguna e-commerce dan aplikasi pinjaman online. Penipu seringkali menawarkan harga produk 
                yang sangat murah atau memberikan tawaran investasi dengan keuntungan tinggi, sehingga banyak orang tertarik dan menjadi korban.

                Pihak kepolisian bekerja sama dengan penyedia layanan digital dan platform media sosial untuk menelusuri dan menangkap para pelaku. 
                Namun, dengan kecanggihan teknologi yang terus berkembang, tantangan untuk menindak para pelaku juga semakin besar.

                "Kami mengimbau masyarakat untuk lebih berhati-hati dalam melakukan transaksi online dan jangan mudah tergiur dengan tawaran yang terlalu bagus untuk 
                menjadi kenyataan. Selalu pastikan keaslian penjual atau platform sebelum melakukan transaksi," tambah Brigjen Pol. Yusuf.

                Penipuan online di Indonesia dijerat dengan pasal tentang kejahatan siber, yang dapat mengancam para pelaku dengan hukuman penjara hingga 6 tahun dan denda maksimal Rp 1 miliar.
            `
        };

        document.getElementById('article-title').innerText = articleData.title;
        document.getElementById('article-date').innerText = articleData.date;
        document.getElementById('article-content').innerText = articleData.content;
    </script>
</body>
</html>
