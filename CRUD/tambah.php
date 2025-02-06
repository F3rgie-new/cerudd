<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Belajar form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <center><h1 class="judul">Form Memesan</h1></center>
    <div class="container-fluid">
        <form action="" method="post">
            <div class="login">
                <b>
                <label for="Masukan Nama">Masukan Nama:</label>
                <p>
                <input type="text" name="nama" id="form_memesan" placeholder="Nama">
                </p>
                <label>kelas:</label>
                <p>
                <input type="text" name="kelas" id="form_memesan" placeholder="kelas">
                </p>
                <label>Sekolah:</label>
                <p>
                <input type="text" name="sekolah" id="form_memesan" placeholder="sekolah">
                </p>
            </div>
            <button type="submit" class="btn btn-success" value="kirim">Kirim</button>
        </form>
    </div>        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>