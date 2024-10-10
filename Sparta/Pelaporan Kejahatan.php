<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetAlert Contoh</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.2/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        .swal2-container {
            backdrop-filter: blur(5px);
            /* efek blur */
        }

        .swal2-container {
            background-color: rgba(0, 0, 0, 1) !important;
            /* Menggelapkan background */
        }

        .swal2-popup {
            margin-top: 0 !important;
            /* modal berada di tengah */
        }
    </style>
</head>
<body>

    <h1>Contoh SweetAlert</h1>
    <p>Halaman ini akan menampilkan alert saat dimuat.</p>

    <script>
        window.onload = function() {
            Swal.fire({
                title: 'Notifikasi',
                text: 'Anda harus login',
                icon: 'warning',
                confirmButtonText: 'OK',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke URL yang diinginkan
                    window.location.href = 'index.php'; // Ganti dengan URL yang diinginkan
                }
            });
        };
    </script>
</body>
</html>
