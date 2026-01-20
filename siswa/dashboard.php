<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['role'] != 'siswa') {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Siswa</title>
</head>

<body>

    <h2>Dashboard Siswa</h2>
    <p>NIS: <?= $_SESSION['nis']; ?></p>
    <p>Kelas: <?= $_SESSION['kelas']; ?></p>

    <a href="../logout.php"
        onclick="return confirm('Yakin ingin logout?')">
        Logout
    </a>

</body>

</html>