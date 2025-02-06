<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <?php

    include "koneksi.php";
    $id = $_GET['id_pelanggan']; 
    $query = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
    while ($hasil = mysqli_fetch_array($query)){
    ?>
    <div class="container-fluid">
        <h1 class="judul">Form</h1>
        <form action="proses_update.php" method="POST">

        <input type="hidden" name="id_pelanggan" value="<?php echo $hasil['id_pelanggan']; ?>">
            <label for="nama">Nama :</label>
            <input type="text" name="nama" value="<?php echo $hasil['nama']; ?>" id="nama" > <br>

            <label for="username">Username :</label>
            <input type="text" name="username" value="<?php echo $hasil['username']; ?>" id="username" > <br>

            <label for="password">Password :</label>
            <input type="password" name="password" value="<?php echo $hasil['password']; ?>" id="password" > <br>

            <label for="no_telpon">No Telepon :</label>
            <input type="tel" name="no_telpon" value="<?php echo $hasil['no_telpon']; ?>" id="no_telpon" > <br>

            <input type="submit" value="edit">
    </div>
    </form>
    <?php } ?>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>