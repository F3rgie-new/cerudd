<?php
include("conn.php");
if(isset($_POST["submit"])) {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["konfirmasipassword"];
        if($password == $confirmpassword) {
            $query = "INSERT INTO aktifitas VALUES ('','$name', '$email', '$username','$password')";
            mysqli_query($conn, $query);
            echo "<script> alert ('registrasi berhasil'); </script>";
        } else {
            echo
            "<script> alert ('Password salah'); </script>";
        }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Sig In</title>
</head>
<body>
    <h1>Sig In</h1>
    <form action="" method="post" autocomplete="off">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required value=""> <br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required value=""> <br>

        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required value=""> <br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required value=""> <br>

        <label for="kofirmasipassword">Konfirmasi Password :</label>
        <input type="password" name="konfirmasipassword" id="konfirmasipassword" required value=""> <br>

        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>
    <a href="login.php">Log in</a>
</body>
</html>