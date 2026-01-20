<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "db_pengaduan";

$conn = mysqli_connect($host, $user, $password, $database);

// cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
