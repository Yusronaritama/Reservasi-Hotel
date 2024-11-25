<?php
session_start();

// Logout logic
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel App - Beranda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/slate/bootstrap.min.css" 
    integrity="sha384-8iuq0iaMHpnH2vSyvZMSIqQuUnQA7QM+f6srIdlgBrTSEyd//AWNMyEaSF2yPzNQ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/home.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel App</a>
            <!-- Dropdown Settings -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle ml-2" type="button" id="settingsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </button>
                <div class="dropdown-menu" aria-labelledby="settingsDropdown">
                    <a class="dropdown-item" href="change_account.php">Change Account</a>
                    <a class="dropdown-item" href="switch_account.php">Switch Account</a>
                </div>
            </div>
            <!-- Navbar Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rooms">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#facilities">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#location">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservasi.php">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-white text-center py-5" style="position: relative; overflow: hidden; min-height: 400px;">
    <div class="container" style="position: relative; z-index: 2;">
        <h1 class="display-4">Selamat Datang di Hotel App</h1>
        <p class="lead">Reservasi kamar dengan mudah, cepat, dan aman.</p>
        <a href="reservasi.php" class="btn btn-light btn-lg" role="button">Pesan Sekarang</a>
    </div>
    <!-- Background Image -->
    <div class="hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; background-image: url('image/267.jpg'); background-size: cover; background-position: center; opacity: 0.6;"></div>
</header>


    <!-- About Section -->
    <section id="about" class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h2>About Us</h2>
            <p class="mt-3">Hotel App menawarkan pengalaman menginap terbaik dengan layanan eksklusif, lokasi strategis, dan fasilitas premium untuk memastikan kenyamanan Anda.</p>
        </div>
    </section>

    <!-- Rating Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2>Customer Ratings</h2>
            <p class="lead mt-3">⭐️⭐️⭐️⭐️⭐️ - 4.8/5 berdasarkan 500 ulasan pelanggan.</p>
            
            <!-- Komentar Pelanggan -->
            <div class="mt-4">
                <h4>Komentar Pelanggan</h4>
                <div class="card mb-3">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"Pelayanan yang luar biasa, staf sangat ramah dan kamar sangat bersih!"</p>
                            <footer class="blockquote-footer">John Doe <cite title="Source Title">via Hotel App</cite></footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"Sangat nyaman untuk menginap bersama keluarga, fasilitasnya lengkap dan lokasi strategis."</p>
                            <footer class="blockquote-footer">Maria Smith <cite title="Source Title">via Google Reviews</cite></footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"Harga sangat terjangkau dengan kualitas pelayanan kelas atas. Akan kembali lagi!"</p>
                            <footer class="blockquote-footer">Ahmad Hasan <cite title="Source Title">via TripAdvisor</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Types Section -->
    <section id="rooms" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Our Rooms</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/room1.jpg" class="card-img-top" alt="Deluxe Room">
                        <div class="card-body">
                            <h5 class="card-title">Deluxe Room</h5>
                            <p class="card-text">Kamar mewah dengan fasilitas lengkap untuk kenyamanan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/room2.jpg" class="card-img-top" alt="Suite Room">
                        <div class="card-body">
                            <h5 class="card-title">Suite Room</h5>
                            <p class="card-text">Nikmati kemewahan dengan ruang tamu terpisah dan pemandangan kota.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/room3.jpg" class="card-img-top" alt="Family Room">
                        <div class="card-body">
                            <h5 class="card-title">Family Room</h5>
                            <p class="card-text">Dirancang khusus untuk keluarga dengan ruang yang luas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="py-5 bg-dark text-white">
        <div class="container">
            <h2 class="text-center mb-4">Our Facilities</h2>
            <ul class="list-unstyled text-center">
                <li><i class="fas fa-swimming-pool fa-2x"></i> Kolam Renang</li>
                <li><i class="fas fa-dumbbell fa-2x"></i> Gym</li>
                <li><i class="fas fa-utensils fa-2x"></i> Restoran</li>
                <li><i class="fas fa-wifi fa-2x"></i> WiFi Gratis</li>
            </ul>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Our Location</h2>
            <p>Jl. Kebahagiaan No.123, Jakarta, Indonesia</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.905853550163!2d106.82715390157307!3d-6.1767693266866425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42e7e2eeb33%3A0xff109d48c7b2e9a!2sJakarta!5e0!3m2!1sen!2sid!4v1631869114986!5m2!1sen!2sid" 
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Hotel App. Semua Hak Dilindungi.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

