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
                <img src="./image/00-news-highlighted.png" alt="Article Header Image" class="header-image">
                <h1 id="article-title">Kesal Dengan DS, Karyawan Outsourcing Umbar Info DS di Twitter.</h1>
                <p class="date" id="article-date">01 September 2020</p>
            </div>
            <div class="article-content" id="article-content">
                <p>
                    FPH diduga telah melakukan akses ilegal terhadap database PT Telkomsel, dengan menyalahgunakan kewenangannya untuk mendapatkan data pribadi seseorang. FPH lantas mengirim foto tampilan desktop yang berisi informasi data pribadi tersebut ke sebuah akun twitter melalui direct message (DM). FPH melakukan hal tersebut karena pada dasarnya tidak suka dengan DS, sehingga mengakibatkan di-bully oleh akun-akun media sosial para pendukung DS. FPH secara pribadi bersimpati dengan akun twitter, sehingga mengirimkan data pribadi tersebut ke akun twitter @Opposite6890, yang selanjutnya data tersebut disebarluaskan oleh akun twitter tersebut. Akibat dari perbuatannya, FPH diancam hukuman pidana penjara minimal 2 tahun dan maksimal 10 tahun dan atau denda paling banyak Rp.10.000.000.000,- (sepuluh miliar rupiah).
                </p>
                <p>
                    Sampai saat ini, Indonesia memang belum memiliki Undang-Undang mengenai perlindungan data pribadi dalam sistem dan transaksi elektronik. Peraturan Menteri Komunikasi dan Informatika Nomor 20 Tahun 2016 yang selama ini digunakan masih belum cukup kuat untuk memberi perlindungan pada masyarakat mengingat status hukumnya yang tidak lebih kuat dari Undang-Undang. Oleh karena itu, penyusunan Undang-undang Perlindungan Data Pribadi (UU PDP) terus didorong agar bisa segera disahkan.
                </p>
                <p>
                    Bagaimana kalau seseorang mengetahui sebagian atau seluruh data pribadi kita, seperti nama, tempat dan tanggal lahir, daftar anggota keluarga, nomor HP, email, nomor kartu kredit, PIN, nomor rekening, password akun media sosial, dan data pribadi lainnya? Bagi sejumlah pihak yang tidak bertanggung jawab, termasuk para penjahat siber, hal itu bisa dipakai untuk mengirim pesan-pesan marketing, email spam, mencoba menebak password, bahkan mungkin dipakai untuk menjawab pertanyaan-pertanyaan validasi yang biasa ditanyakan ketika seorang lupa password tertentu, termasuk untuk kepentingan perbankan saat menanyakannya untuk pencocokan data.
                </p>
                <p>
                    Pastikan kita secara berkala, misalnya mengganti password dengan kombinasi yang kuat, merubah PIN, mengaktifkan two factor authentication, dan menjaga data pribadi kita selalu terlindungi untuk diri sendiri dan tidak pernah dibagikan kepada orang lain, serta tidak tercantum di akun media sosial yang kita miliki.
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
            title: "Kesal Dengan DS, Karyawan Outsourcing Umbar Info DS di Twitter.",
            date: "01 September 2020",
            content: "FPH diduga telah melakukan akses ilegal terhadap database PT Telkomsel, dengan menyalahgunakan kewenangannya untuk mendapatkan data pribadi seseorang. FPH lantas mengirim foto tampilan desktop yang berisi informasi data pribadi tersebut ke sebuah akun twitter melalui direct message (DM). FPH melakukan hal tersebut karena pada dasarnya tidak suka dengan DS, sehingga mengakibatkan di-bully oleh akun-akun media sosial para pendukung DS. FPH secara pribadi bersimpati dengan akun twitter, sehingga mengirimkan data pribadi tersebut ke akun twitter @Opposite6890, yang selanjutnya data tersebut disebarluaskan oleh akun twitter tersebut. Akibat dari perbuatannya, FPH diancam hukuman pidana penjara minimal 2 tahun dan maksimal 10 tahun dan atau denda paling banyak Rp.10.000.000.000,- (sepuluh miliar rupiah)."
        };

        document.getElementById('article-title').innerText = articleData.title;
        document.getElementById('article-date').innerText = articleData.date;
        document.getElementById('article-content').innerText = articleData.content;
    </script>
</body>
</html>
