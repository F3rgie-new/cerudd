<?php
include("conn.php");
if(isset($_POST["submit"])) {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
            $query = "INSERT INTO aktifitas VALUES ('','$name', '$email', '$username','$password')";
            mysqli_query($conn, $query);
            header("location:login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Sig In</title>
</head>
<body>
    <h1>TAMBAH DATA</h1>
    <form action="register.php" method="post" autocomplete="off">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" required value=""> <br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required value=""> <br>

        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required value=""> <br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required value=""> <br>

        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>
</body>
</html>