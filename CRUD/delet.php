<?php

include 'conn.php';
$id = $_GET['id']; {
    $query = "DELETE FROM aktifitas WHERE id = '$id'";
    mysqli_query($conn, $query);
    header("Location:tampil.php");
}
?>