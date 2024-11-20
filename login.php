<?php
session_start();
include 'db.php'; // Koneksi ke database

session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: reservasi.php"); // Jika sudah login, langsung ke halaman reservasi
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mengambil data pengguna dari database berdasarkan email
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        // Jika user ditemukan, simpan data user di session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];

        // Setelah login berhasil, arahkan ke halaman reservasi
        header("Location: reservasi.php");
        exit(); // Jangan lupa untuk menghentikan eksekusi lebih lanjut setelah header.
    } else {
        // Jika login gagal
        echo "<script>alert('Email atau Password salah.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hotel Indah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar disini</a></p>
    </div>
</body>
</html>
