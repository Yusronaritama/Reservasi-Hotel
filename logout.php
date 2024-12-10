<?php
session_start();
session_unset();
session_destroy();

// Setelah logout, arahkan ke halaman login
header("Location: login.php");
exit();
?>
