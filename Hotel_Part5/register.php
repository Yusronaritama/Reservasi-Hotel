<?php
$conn = new mysqli("localhost", "root", "", "hotel_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
    $query->bind_param("ssss", $name, $username, $email, $password);

    if ($query->execute()) {
        header("Location: index.php");
    } else {
        $error = "Registrasi gagal!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/slate/bootstrap.min.css" integrity="sha384-8iuq0iaMHpnH2vSyvZMSIqQuUnQA7QM+f6srIdlgBrTSEyd//AWNMyEaSF2yPzNQ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/registrasi.css">
</head>
<body>
    <div class="form-box">
        <h2>Register</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <!-- Name Field -->
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>
            <!-- Username Field -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>
            <!-- Email Field -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
            </div>
            <!-- Password Field -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <p class="text-muted">Sudah punya akun? <a href="index.php">Login</a></p>
    </div>
</body>
</html>
