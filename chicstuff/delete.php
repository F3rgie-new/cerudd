<?php
include 'koneksi.php';

if(isset($_GET['id_pelanggan'])) {
    $id = $_GET['id_pelanggan'];
    $query = "DELETE FROM pelanggan WHERE id_pelanggan = '$id'";
    
    if(mysqli_query($koneksi, $query)) {
        header("Location: admin/pengguna.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    header("Location: admin/pengguna.php");
    exit();
}
?>