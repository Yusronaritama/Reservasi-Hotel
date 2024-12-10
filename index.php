<?php
// Memulai sesi untuk memeriksa status login
session_start();
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
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #ffffff;
        }

        /* Hero Section */
        #hero {
            position: relative;
            text-align: center;
            color: #ffffff;
        }

        .hero-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            opacity: 0.7;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero-text h1 {
            font-size: 3rem;
            margin: 0;
        }

        /* Navbar */
        .navbar {
            background-color: #1e1e1e;
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar nav {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        .navbar a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 400;
        }

        .navbar a:hover {
            color: #f39c12;
        }

        .btn-nav {
            background-color: #f39c12;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .btn-nav:hover {
            background-color: #e67e22;
        }

        /* Section Styling */
        section {
            padding: 2rem 1rem;
            text-align: center;
        }

        h2 {
            color: #f39c12;
            margin-bottom: 1rem;
        }

        .facilities-container {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .facility {
            background-color: #1e1e1e;
            padding: 1rem;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .facility img {
            width: 100%;
            border-radius: 10px;
        }

        .facility h3 {
            color: #f39c12;
            margin-top: 1rem;
        }

        footer {
            text-align: center;
            background-color: #1e1e1e;
            padding: 1rem 0;
            margin-top: 2rem;
        }

        footer p {
            margin: 0;
        }
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

                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="reservasi.php" class="btn-nav">Reservasi</a>
                    <a href="logout.php" class="btn-nav">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="btn-nav">Login</a>
                    <a href="register.php" class="btn-nav">Registrasi</a>
                <?php endif; ?>
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
