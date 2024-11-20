<?php
$servername = "localhost";
$username = "root";  // Username database
$password = "";      // Password database
$dbname = "hotel_indah"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
