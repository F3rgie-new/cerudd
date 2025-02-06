<?php
include("koneksi.php");
if(isset($_POST["submit"])) {
    $name = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $no_telpon = $_POST["no_telpon"];
        $query = "INSERT INTO pelanggan VALUES ('','$name', '$username','$password', '$no_telpon')";
        mysqli_query($koneksi, $query);
        header ("location:admin/pengguna.php");
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Belajar form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <center><h1 class="judul">Form Memesan</h1></center>
    <div class="container-fluid">
        <form action="tambah.php" method="post">
            <label for="nama">Nama</label>
            <div class="user-box">
                <input type="text" name="nama" id="nama" required value="">
            </div>
            <label for="username">Username</label>
            <div class="user-box">
                <input type="text" name="username" id="username" required value="">
            </div>
            <label for="password">Password</label>
            <div class="user-box">
                <input type="password" name="password" id="password" required value="">
            </div>
            <br>
            <label for="no_telpon">No Telepon</label>
            <div class="user-box">    
                <input type="tel" name="no_telpon" id="no_telpon" required value="">   
            </div>

            <center><input type="submit" name="submit" class="tombol_login"></center>
        </form>
    </div>        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>