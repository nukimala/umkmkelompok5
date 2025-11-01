<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "wildan barber";

$conn = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$conn) {
    die("❌ Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
