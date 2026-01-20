<?php
session_start();

// proteksi halaman admin
if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
</head>

<body>

    <h2>Dashboard Admin</h2>
    <p>Selamat datang, <?= $_SESSION['username']; ?></p>

    <a href="../logout.php"
        onclick="return confirm('Yakin ingin logout?')">
        Logout
    </a>
</body>

</html>