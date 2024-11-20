<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Jika belum login, arahkan ke login
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_SESSION['user_id'];
    $room_type = $_POST['room_type'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    // Koneksi ke database
    require 'db.php';

    // Insert data reservasi ke database
    $stmt = $conn->prepare("INSERT INTO reservations (user_id, room_type, check_in, check_out) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $user_id, $room_type, $check_in, $check_out);

    if ($stmt->execute()) {
        echo "Reservasi berhasil! <a href='index.php'>Kembali ke Halaman Utama</a>";
    } else {
        echo "Terjadi kesalahan, coba lagi.";
    }

    $stmt->close();
}
?>
