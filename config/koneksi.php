<?php
$host = "localhost";
$users = "root";
$pass = "";
$db   = "db_ukk_2026_rakha";

$koneksi = mysqli_connect($host, $users, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>