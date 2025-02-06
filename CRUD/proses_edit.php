<?php
include 'conn.php';

if(isset($_POST['submit'])) {
    // Get form data
    $id = $_POST['id']; // Add this line to capture the ID
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Update query
    $query = "UPDATE aktifitas SET 
              nama = '$nama',
              email = '$email',
              username = '$username',
              password = '$password'
              WHERE id = '$id'";
    
    // Execute query
    $result = mysqli_query($conn, $query);
    
    // Check if update was successful
    if($result) {
        echo "<script>
                alert('Data berhasil diupdate!');
                window.location.href = 'tampil.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal mengupdate data!');
                window.location.href = 'tampil.php';
              </script>";
    }
} else {
    // If accessed directly without form submission
    header("Location: tampil.php");
    exit();
}
?>