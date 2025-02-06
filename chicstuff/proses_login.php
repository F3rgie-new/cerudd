<?php 
include ("koneksi.php");
if(isset($_POST['username']) && isset ($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty ($username) && !empty ($password)) {
        $sql = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username='$username' AND password='$password'");
        $cek = mysqli_num_rows($sql);
        if ($cek == 1) {
        session_start();
        $user = mysqli_fetch_assoc($sql);
            if($user['level'] == 'admin' ) {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "admin";
                header("location:admin/tampilan_admin.php");
            } else if ($user['level'] == 'pengguna') {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "pengguna";
                header("location:pengguna/tampilan_pengguna.php");
            }
        }else {
            echo "<script>alert ('username atau password salah'); </script>";
        }
    } else {
        echo "<script>alert ('anda belum terdaftar'); </script>";
    }
} 


?>