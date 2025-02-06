<?php
global $conn;

$servername = "localhost";
$username   = "root";
$password   = "";
$namadb     = "latihan";
$conn    = mysqli_connect($servername, $username, $password, $namadb);

if (!$conn) {
    die("Koneksi gagal" . mysqli_connect_error());
}
?>