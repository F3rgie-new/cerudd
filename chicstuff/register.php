<?php
include("koneksi.php");
if(isset($_POST["submit"])) {
    $name = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $no_telpon = $_POST["no_telpon"];
    $level = $_POST["level"];
        $query = "INSERT INTO pengguna VALUES ('','$name', '$username','$password', '$no_telpon', '$level')";
        mysqli_query($koneksi, $query);
        header ("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>

    <!--register-->
        <div class="register-box">
            <h1><center>Register</center></h1>
                <form action="register.php" method="post">
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
                    <br>
                    <label for="level">Daftar Sebagai</label>
                    <div class="user-box">    
                        <input type="text" name="level" id="level" required value="pengguna"> 
                    </div>
                    <center><button type="submit" name="submit" class="tombol_login">Register</button></center>
                </form>
                <center><p>Sudah punya akun?<a href="login.php">Login</a></p></center>
        </div>

        <div class="judul">
            <h1>Create</h1>
        </div>
        <div class="judul2">
            <h1>Account</h1>
        </div>
</body>
</html>