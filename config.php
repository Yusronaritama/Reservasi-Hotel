<?php
// Pastikan file ini disimpan dengan ekstensi .php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Indah</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Tambahkan style seperti pada kode Anda di atas */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #ffffff;
        }

        /* Style lainnya tetap sama */
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section id="hero">
        <img src="267.jpg" alt="Hotel Indah" class="hero-image">
        <div class="hero-text">
            <h1>Hotel Indah</h1>
            <p>Pengalaman menginap yang tak terlupakan dengan kenyamanan dan kemewahan.</p>
        </div>
    </section>

    <!-- Navbar -->
    <header>
        <div class="navbar">
            <nav>
                <a href="#about">Tentang Kami</a>
                <a href="#facilities">Fasilitas</a>
                <a href="#reviews">Ulasan</a>
                <a href="#contact">Kontak</a>
                <!-- PHP untuk membuat tautan -->
                <a href="login.php" class="btn-nav">Login</a>
                <a href="register.php" class="btn-nav">Registrasi</a>
                <a href="reservation.php" class="btn-nav">Reservasi</a>
            </nav>
        </div>
    </header>

    <!-- About Section -->
    <section id="about">
        <h2>Tentang Kami</h2>
        <p>Hotel Indah adalah tempat terbaik untuk menikmati waktu bersama keluarga atau dalam perjalanan bisnis. Lokasi strategis dengan fasilitas lengkap dan layanan prima.</p>
    </section>

    <!-- Facilities Section -->
    <section id="facilities">
        <h2>Fasilitas Kami</h2>
        <div class="facilities-container">
            <div class="facility">
                <img src="images/pool.jpg" alt="Kolam Renang">
                <h3>Kolam Renang</h3>
                <p>Nikmati kesegaran berenang di kolam kami yang bersih dan nyaman.</p>
            </div>
            <div class="facility">
                <img src="images/restaurant.jpg" alt="Restoran">
                <h3>Restoran</h3>
                <p>Sajian kuliner terbaik untuk memanjakan lidah Anda.</p>
            </div>
            <div class="facility">
                <img src="images/spa.jpg" alt="Spa">
                <h3>Spa</h3>
                <p>Manjakan diri Anda dengan perawatan spa yang mewah.</p>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews">
        <h2>Kata Pelanggan</h2>
        <div class="review">
            <p>"Pelayanan luar biasa, kamar bersih, dan suasananya nyaman!"</p>
            <p>- Andi</p>
        </div>
        <div class="review">
            <p>"Makanan di restorannya sangat enak, pasti kembali lagi!"</p>
            <p>- Siti</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Kontak Kami</h2>
        <p>Alamat: Jl. Kebahagiaan No. 123, Jakarta</p>
        <p>Telepon: (021) 123-4567</p>
        <p>Email: info@hotelindah.com</p>
    </section>

    <footer>
        <p>&copy; 2024 Hotel Indah. All rights reserved.</p>
    </footer>
</body>
</html>
