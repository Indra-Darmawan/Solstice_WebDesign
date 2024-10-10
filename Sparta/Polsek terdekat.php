<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polsek Terdekat</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Header */
        .swal2-container {
            backdrop-filter: blur(5px);
            /*efek blur */
        }

        .swal2-container {
            background-color: rgba(0, 0, 0, 1) !important;
            /* Menggelapkan background */
        }

        .swal2-popup {
            margin-top: 0 !important;
            /* modal berada di tengah */
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

        /* Main Section */
        .container {
            display: flex;
            justify-content: space-around;
            padding: 50px;
            background-color: white;
        }

        .card {
            background-color: #ecf0f1;
            padding: 20px;
            text-align: center;
            border: 1px solid #bdc3c7;
            border-radius: 10px;
            width: 30%;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }

        .card h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .card p {
            margin-bottom: 20px;
            font-size: 14px;
        }

        .card button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .card button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        #map {
            height: 400px;
            width: 100%;
            margin-top: 20px;
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
        <button class="login-btn" onclick="window.location.href='login.php'">Login</button>
    </header>
  
    <!-- Main Content -->
    <div class="container">
        <div class="card">
            <img src="./image/download (4).jpeg" alt="Polsek Sukomanunggal">
            <h2>Polsek Sukomanunggal</h2>
            <p>Jl. Sukomanunggal No.12, Surabaya, Jawa Timur 60188</p>
            <button onclick="calculateRoute([-7.2654, 112.7024])">Memulai Rute</button>
        </div>
        <div class="card">
            <img src="./image/download (3).jpeg" alt="Polsek Tandes">
            <h2>Polsek Tandes</h2>
            <p>Jl. Raya Darmo Permai Utara No.1, Surabaya, Jawa Timur 60188</p>
            <button onclick="calculateRoute([-7.2724, 112.6791])">Memulai Rute</button>
        </div>
    </div>

    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 SPARTA - Sistem Pelaporan Aksi dan Respons Terpadu Aman</p>
    </footer>

    <script>
        // Initialize the map with Leaflet.js
        var map = L.map('map').setView([-7.2575, 112.7521], 12);

        // Add tile layer from OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var userLocation; // Declare user location globally

        // Function to get user's current location and update the map
        navigator.geolocation.getCurrentPosition(function(position) {
            var userLat = position.coords.latitude;
            var userLng = position.coords.longitude;

            // Center map on user's location
            userLocation = L.latLng(userLat, userLng);
            map.setView(userLocation, 14);

            // Add marker for user's location
            L.marker(userLocation).addTo(map).bindPopup('Lokasi Anda').openPopup();
        }, function(error) {
            alert('Error: ' + error.message);
        });

        // Function to calculate the route
        function calculateRoute(destination) {
            if (!userLocation) {
                alert('Lokasi pengguna tidak ditemukan!');
                return;
            }

            // Remove previous layers
            map.eachLayer(function(layer) {
                if (layer instanceof L.Marker || layer instanceof L.Polyline) {
                    map.removeLayer(layer);
                }
            });

            // Add marker for user's current location
            L.marker(userLocation).addTo(map).bindPopup('Lokasi Anda').openPopup();

            // Add marker for the destination (Polsek)
            var end = L.latLng(destination[0], destination[1]);
            L.marker(end).addTo(map).bindPopup('Polsek Tujuan').openPopup();

            // Draw a straight line as the route
            var latlngs = [userLocation, end];
            var polyline = L.polyline(latlngs, { color: 'blue' }).addTo(map);

            // Zoom and pan the map to fit the route
            map.fitBounds(polyline.getBounds());
        }
    </script>
</body>
</html>
