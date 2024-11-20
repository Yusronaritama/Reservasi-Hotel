<?php
session_start();

// Periksa apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    // Jika tidak, arahkan ke halaman login
    header("Location: login.php");
    exit();
}

include 'db.php'; // Koneksi ke database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi - Hotel Indah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="reservasi-container">
        <h2>Reservasi Kamar</h2>
        <p>Silakan pilih jenis kamar yang ingin Anda pesan:</p>

        <div class="kamar">
            <h3>Family Room</h3>
            <p>Harga: Rp 1.000.000 per malam</p>
            <button>Pesan Sekarang</button>
        </div>
        <div class="kamar">
            <h3>Suit Room</h3>
            <p>Harga: Rp 1.500.000 per malam</p>
            <button>Pesan Sekarang</button>
        </div>
        <div class="kamar">
            <h3>Single Room</h3>
            <p>Harga: Rp 700.000 per malam</p>
            <button>Pesan Sekarang</button>
        </div>
    </div>
</body>
</html>
