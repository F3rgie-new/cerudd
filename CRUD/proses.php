<?php
include 'conn.php';

//hapus data
$id = $_GET['id']; {
    $query = "DELETE FROM aktifitas WHERE id = '$id'";
    mysqli_query($conn, $query);
    header("Location:read.php");
}

//create
if (isset ($_POST['submit'])) {
    if ($_POST['submit'] == "kirim") {
        $nama =  $_POST['nama'];
        $kelas = $_POST['kelas'];
        $sekolah =  $_POST['sekolah'];
        $kopi = $_POST['kopi'];
        $pesanan = $_POST['pesanan'];
         
        $sql = "INSERT INTO aktifitas VALUES ('','$nama',
        '$kelas','$sekolah','$kopi','$pesanan')";

        if ($sql) {
            header("location: index.php ");
        } else {
            echo $query;
        }

//update
    } else if ($_POST['submit'] == "edit" ) {
        $nama =  $_POST['nama'];
        $kelas = $_POST['kelas'];
        $sekolah =  $_POST['sekolah'];
        $kopi = $_POST['kopi'];
        $pesanan = $_POST['pesanan'];

        $query = mysqli_query($conn,"SELECT * FROM aktifitas WHERE id='$id'");
        while ($hasil = mysqli_fetch_array($query))

        $query = "UPDATE 'aktifitas' SET nama='$nama', kelas='$kelas', sekolah='$sekolah', kopi='$kopi', pesanan='$pesanan' WHERE id='$id'";
        mysqli_query($conn, $query);
        header("location:index.php");
    }

}
?>