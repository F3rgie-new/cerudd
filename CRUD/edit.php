<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Belajar form</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <?php
    include 'conn.php';
    $id = $_GET['id']; 
    $query = mysqli_query($conn,"SELECT * FROM aktifitas WHERE id='$id'");
    while ($hasil = mysqli_fetch_array($query)){
    ?>
    <div class="container-fluid">
        <h1 class="judul">Form</h1>
        <form action="proses_edit.php" method="post" autocomplete="off">
        <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
        
        <label for="nama">Nama :</label>
        <input type="text" name="nama" value="<?php echo $hasil['nama'] ?>" id="nama" required> <br>

        <label for="email">Email :</label>
        <input type="email" name="email" value="<?php echo $hasil['email'] ?>" id="email" required> <br>

        <label for="username">Username :</label>
        <input type="text" name="username" value="<?php echo $hasil['username'] ?>" id="username" required> <br>

        <label for="password">Password :</label>
        <input type="password" name="password" value="<?php echo $hasil['password'] ?>" id="password" required> <br>

        <button type="submit" name="submit">Kirim</button>
        </form>
    </div>
    <?php } ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>