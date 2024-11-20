<?php
session_start();
include 'db.php'; // Koneksi ke database

// Cek apakah user sudah login
if (isset($_SESSION['user_id'])) {
    header("Location: reservasi.php"); // Jika sudah login, langsung ke halaman reservasi
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email tidak valid.');</script>";
    } else {
        // Query untuk mengecek apakah email sudah terdaftar
        $checkEmail = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $checkEmail);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Email sudah terdaftar.');</script>";
        } else {
            // Menyimpan data user baru ke database dengan password yang aman
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Menggunakan password hash untuk keamanan

            // Query untuk memasukkan data ke dalam tabel users
            $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
            if (mysqli_query($conn, $query)) {
                // Redirect setelah registrasi berhasil
                header("Location: login.php"); // Arahkan pengguna ke halaman login setelah registrasi berhasil
                exit;
            } else {
                // Menampilkan error jika query gagal
                echo "<script>alert('Gagal mendaftar. Error: " . mysqli_error($conn) . "');</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Hotel Indah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register-container">
        <h2>Registrasi</h2>
        <form method="POST" action="register.php">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
    </div>
</body>
</html>
