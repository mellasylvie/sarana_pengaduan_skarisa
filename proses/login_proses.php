<?php
session_start();
include '../config/database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$admin = mysqli_query(
    $conn,
    "SELECT * FROM admin 
     WHERE username='$username' 
     AND password='$password'"
);

if (mysqli_num_rows($admin) == 1) {
    $data = mysqli_fetch_assoc($admin);

    $_SESSION['login'] = true;
    $_SESSION['role'] = 'admin';
    $_SESSION['username'] = $data['username'];

    header("Location: ../admin/dashboard.php");
    exit;
}


$siswa = mysqli_query(
    $conn,
    "SELECT * FROM siswa 
     WHERE nis='$username'"
);

if (mysqli_num_rows($siswa) == 1) {
    $data = mysqli_fetch_assoc($siswa);

    $_SESSION['login'] = true;
    $_SESSION['role'] = 'siswa';
    $_SESSION['nis'] = $data['nis'];
    $_SESSION['kelas'] = $data['kelas'];

    header("Location: ../siswa/dashboard.php");
    exit;
}

echo "<script>
    alert('Login gagal. Periksa data Anda');
    window.location='../login.php';
</script>";
