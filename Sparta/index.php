<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPARTA - Sistem Pelaporan Aksi dan Respons Terpadu Aman</title>
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
        color: #e7d918;
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

      /* Hero Section */
      .hero {
        background-image: url('./image/background image.png');
        background-size: cover;
        background-position: center;
        height: 800px;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 50px;
      }
      .hero h2 {
        font-size: 36px;
      }
      .hero p {
        font-size: 18px;
      }
      .hero .btn {
        background-color: #e7d918;
        padding: 15px 30px;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-right: 20px;
        transition: background-color 0.3s, color 0.3s;
      }
      .hero .btn:hover {
        background-color: white;
        color: #2a3987;
      }
      .hero .btn-secondary {
        background-color: white;
        color: #2a3987;
        transition: background-color 0.3s, color 0.3s;
      }
      .hero .btn-secondary:hover {
        background-color: #e7d918;
        color: white;
      }

      /* Feature Section */
      .feature-section {
        display: flex;
        justify-content: space-between;
        padding: 50px;
        background-color: white;
        gap: 20px; /* Tambahkan gap untuk jarak antar kartu */
      }
      .feature-card {
        width: 22%;
        background-color: #2a3987;
        color: white;
        text-align: center;
        padding: 20px;
        border-radius: 10px;
        transition: background-color 0.3s, transform 0.3s;
      }
      .feature-card:hover {
        background-color: #1f2c65;
        transform: translateY(-5px);
      }
      .feature-card h3 {
        font-size: 20px;
        margin-bottom: 20px;
      }
      .feature-card p {
        font-size: 14px;
      }
      .feature-card a {
        display: block;
        background-color: #e7d918;
        padding: 10px;
        margin-top: 20px;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        transition: background-color 0.3s, color 0.3s;
      }
      .feature-card a:hover {
        background-color: white;
        color: #2a3987;
      }

      /* News Section */
      .news-section {
        padding: 50px;
        background-color: #f4f4f4;
      }
      .news-section h2 {
        text-align: center;
        margin-bottom: 50px;
      }
      .news-grid {
        display: flex;
        justify-content: space-between;
        gap: 20px; /* Tambahkan gap untuk tata letak horizontal */
      }
      .news-card {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s, transform 0.3s;
        flex: 1; /* Tambahkan ini untuk membuat card fleksibel */
      }
      .news-card:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
      }
      .news-card h3 {
        font-size: 18px;
        margin-bottom: 10px;
      }
      .news-card p {
        font-size: 14px;
        color: #666;
      }
      .news-card a {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #2a3987;
        transition: color 0.3s;
      }
      .news-card a:hover {
        color: #e7d918;
      }

      /* Police Station Section */
      .police-section {
        padding: 50px;
        background-color: white;
        text-align: center;
      }
      .police-section h2 {
        margin-bottom: 30px;
      }
      .police-map {
        width: 100%;
        height: 400px;
        background-color: #d3d3d3;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        color: #555;
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
          <li><a href="index.php">Beranda</a></li>
          <li><a href="Berita%20kejahatan.php">Berita Kejahatan</a></li>
          <li><a href="Polsek%20terdekat.php">Polsek Terdekat</a></li>
          <li><a href="Panggilan%20Darurat.php">Kontak Darurat</a></li>
          <li><a href="Pelaporan%20Kejahatan.php">Laporkan</a></li>
          <li><a href="Tentang%20Kami.php">Tentang Kami</a></li>
        </ul>
      </nav>
      <button class="login-btn login-btn-hover" onclick="window.location.href='login.php'">login</button>
    </header>

    <!-- Hero Section -->
    <div class="hero">
      <div>
        <h2>SPARTA - Sistem Pelaporan Aksi dan Respons Terpadu Aman</h2>
        <p>
          Sistem respons cepat untuk melaporkan kejadian darurat dan kejahatan
          secara online dengan penanganan tepat waktu dari pihak berwenang.
        </p>
        <a href="Panggilan Darurat.php" class="btn">Panggilan Darurat</a>
        <a href="Pelaporan Kejahatan.php" class="btn btn-secondary">Laporkan Kejadian</a>
      </div>
    </div>

    <!-- Feature Section -->
    <div class="feature-section">
      <div class="feature-card">
        <h3>Panggilan Darurat</h3>
        <p>Penanganan kejadian sementara dengan respon cepat 24/7.</p>
        <a href="Panggilan Darurat.php">Hubungi Sekarang</a>
      </div>
      <div class="feature-card">
        <h3>Pelaporan Kejadian</h3>
        <p>Laporkan tindak kejahatan secara mudah dan cepat.</p>
        <a href="Pelaporan Kejahatan.php">Laporkan Sekarang</a>
      </div>
      <div class="feature-card">
        <h3>Polsek Terdekat</h3>
        <p>Cari tahu lokasi kantor polisi terdekat di daerah Anda.</p>
        <a href="Polsek terdekat.php">Lihat Lokasi</a>
      </div>
      <div class="feature-card">
        <h3>Berita Kejahatan</h3>
        <p>Dapatkan berita terbaru tentang tindak kejahatan di sekitar Anda.</p>
        <a href="Berita kejahatan.php">Baca Berita</a>
      </div>
    </div>

    <!-- News Section -->
    <div class="news-section">
      <h2>Berita Kejahatan Terbaru</h2>
      <div class="news-grid">
        <div class="news-card">
          <h3>Kejadian Perampokan di Jakarta</h3>
          <p>
            Polisi berhasil menangkap pelaku perampokan di sebuah minimarket di
            Jakarta Barat setelah terjadi kejar-kejaran sengit.
          </p>
          <a href="artikel-beranda1.php">Baca Selengkapnya</a>
        </div>
        <div class="news-card">
          <h3>Kasus Pencurian Motor di Bekasi</h3>
          <p>
            Pencurian motor meningkat di daerah Bekasi dalam beberapa bulan
            terakhir. Polisi menghimbau warga untuk waspada.
          </p>
          <a href="artikel-beranda2.php">Baca Selengkapnya</a>
        </div>
        <div class="news-card">
          <h3>Penipuan Online Berkedok Investasi</h3>
          <p>
            Waspada terhadap penipuan online yang semakin marak dengan modus
            penawaran investasi palsu melalui media sosial.
          </p>
          <a href="artikel-beranda3.php">Baca Selengkapnya</a>
        </div>
      </div>
    </div>

    <!-- Police Station Section -->
    <div class="police-section">
      <h2>Polsek Terdekat</h2>
      <div class="police-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.0978030181143!2d106.82194559999999!3d-6.2174935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f422a73b0a0f%3A0xd751564ca2604e21!2sPolda%20Metro%20Jaya!5e0!3m2!1sid!2sid!4v1696499923982!5m2!1sid!2sid"
          width="100%"
          height="400px"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <p>SPARTA &copy; 2024. All Rights Reserved.</p>
    </footer>
  </body>
</html>
