
<?php
/*include 'koneksi.php';
$_POST['submit'] == "edit"; {
    $id = $_POST['id_pelanggan'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $no_telpon = $_POST['no_telpon'];

    $query = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
    $sql = mysqli_query($koneksi, $query);
    $hasil = mysqli_fetch_assoc($query);

    $query = mysqli_query($koneksi,"UPDATE pelanggan SET nama='$nama', username='$username', password='$password', no_telpon='$no_telpon' WHERE id_pelanggan='$id'");
    $sql = mysqli_query($koneksi, $query);
    header("location:pengguna.php");
} 
?>
*/

include 'koneksi.php';
    $query = mysqli_query($koneksi, "UPDATE pelanggan set 
    id_pelanggan= '$_POST[id_pelanggan]',
    nama= '$_POST[nama]',
    username = '$_POST[username]',
    password = '$_POST[password]',
    no_telpon = '$_POST[no_telpon]'
    where id_pelanggan = '$_POST[id_pelanggan]'") or die(mysqli_error($koneksi));
    header("location:admin/pengguna.php");
?>