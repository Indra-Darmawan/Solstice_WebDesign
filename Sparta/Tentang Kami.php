<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPARTA - Sistem Pelaporan Aksi dan Respons Terpadu Aman</title>
    <style>
        /* General layout adjustments */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
            color: #333;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        /* Updated Header styling for full width */
        header {
            background-color: #2a3987;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            position: relative;
            top: 0;
            left: 0;
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
            color: #e7d918; /* Hover color */
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
        background-color: #e7d918;
        color: white;
      }

        /* Main content section */
        .main-content {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin-top: 20px;
        }
        .main-content-text {
            width: 60%;
        }
        .main-content h2 {
            color: #003366;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .main-content p {
            margin: 10px 0;
            font-size: 16px;
        }
        .stats {
            width: 35%;
            display: flex;
            justify-content: flex-end;
        }
        .stats img {
            max-width: 100%;
            height: auto;
        }
        
        /* Links section */
        .links {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
            background: linear-gradient(135deg, #6070C5, #5A49BE);
            padding: 20px;
            border-radius: 10px;
        }
        .link-item {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            width: 30%;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .link-item img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }
        .link-item:hover {
            background-color: #cce5ff;
        }
        .link-text {
            color: #003366;
            font-weight: bold;
        }

        /* Footer styling */
        footer {
            background-color: #2a3987;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }
        footer p {
            margin: 0;
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
    <button class="login-btn login-btn-hover" onclick="window.location.href='login.php'">Login</button>
  </header>
  
    <div class="container">
        <!-- Main content section -->
        <section class="main-content">
            <div class="main-content-text">
                <h2>Sistem Pelaporan Aksi dan Respons Terpadu Aman</h2>
                <p>adalah inisiatif yang bertujuan untuk meningkatkan kesadaran masyarakat tentang pentingnya keamanan lingkungan serta mendorong partisipasi aktif dalam menjaga keamanan bersama.</p>
                <p>Melalui SPARTA, masyarakat dapat dengan mudah melaporkan berbagai kejahatan online maupun offline, memungkinkan pihak berwenang untuk merespons laporan dengan lebih cepat dan efektif.</p>
                <p>Sistem ini dirancang untuk mempercepat penanganan kejahatan dan membangun kerja sama yang lebih baik antara masyarakat dan aparat penegak hukum.</p>
            </div>
            <div class="stats">
                <img src="./image/OIG1.kV7lcjFqiHUCOK_lT.jpeg" alt="Statistik Banner">
            </div>
        </section>

        <!-- Links section -->
        <section class="links">
            <div class="link-item" id="dinkes">
                <img src="./image/WhatsApp Image 2024-09-27 at 22.29.17_8e2bc691.jpg" alt="Dinas Kesehatan Kota Surabaya">
                <p class="link-text">Dinas Kesehatan Kota Surabaya</p>
            </div>
            <div class="link-item" id="polrestabes">
                <img src="./image/WhatsApp Image 2024-09-27 at 22.29.17_bb9f08f6.jpg" alt="Kepolisian Resor Kota Besar Surabaya">
                <p class="link-text">Kepolisian Resor Kota Besar Surabaya</p>
            </div>
            <div class="link-item" id="pemkot">
                <img src="./image/WhatsApp Image 2024-09-27 at 22.29.17_8719aa22.jpg" alt="Pemerintahan Kota Surabaya">
                <p class="link-text">Pemerintahan Kota Surabaya</p>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <p>&copy; 2024 SPARTA - Sistem Pelaporan Aksi dan Respons Terpadu Aman</p>
           
        </footer>
    </div>

    <!-- External links -->
    <script>
        document.getElementById("dinkes").addEventListener("click", function() {
            window.open("https://www.instagram.com/sehatsurabayaku?igsh=MW90eHV2a2wwNHZrbA==", "_blank");
        });
        document.getElementById("polrestabes").addEventListener("click", function() {
            window.open("https://www.instagram.com/humaspolrestabessurabaya?igsh=MWtvdGVhN2t0eTd1Mw==", "_blank");
        });
        document.getElementById("pemkot").addEventListener("click", function() {
            window.open("https://www.instagram.com/surabaya?igsh=YXU4NnNvMnlhNjNw", "_blank");
        });
    </script>
</body>
</html>
