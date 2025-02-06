<!DOCTYPE html>
<html>
    <head>
        <title>tampilan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>
    <body>
  <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container"> 
            <img src="../foto/logochicstuff.png" alt="chic stuff" width="4%">

            <form action="pengguna.php" method="GET">
              <input type="text" name="cari" >
              <input type="submit" value="Cari" class="btn btn-primary">
            </form>
        </div>
    </nav>

    <div class="container">
    <h1>User</h1>

    <table border="1" class="table table-striped table-hover">
            <tr>
                <td>id</td>
                <td>Nama</td>
                <td>Username</td>
                <td>No Telepon</td>
                <td>Aksi</td>
            </tr>

        <?php

        include '../koneksi.php';
        if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $query = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE nama like '%".$cari."%'");				
        }else{
          $query = mysqli_query($koneksi,"SELECT * FROM pelanggan");		
        }
            while ($hasil = mysqli_fetch_array($query)){
                ?>
 
        <tr>
            <td><?php echo $hasil['id_pelanggan']; ?></td>
            <td><?php echo $hasil['nama']; ?></td>
            <td><?php echo $hasil['username']; ?></td>
            <td><?php echo $hasil['no_telpon']; ?></td>
            <td>
                    <a href="../update.php?id_pelanggan=<?php echo $hasil['id_pelanggan']; ?>" type="button" class="btn btn-success btn-sm"></i> Edit</a>                                                  
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      </i> Hapus</button>
                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Menghapus Data </h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Apakah Anda yakin Ingin menghapus ini?
                        </div>
                        <div class="modal-footer">                          
                        <a href="../delete.php?id_pelanggan=<?php echo $hasil['id_pelanggan'] ?>" class="btn btn-danger">Hapus</a>
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </td>
        </tr>
        <?php } ?>
        </table>
        <a href="../tambah.php" class="btn btn-secondary">Tambah Data</a>
        </div>
    </div>
    </body>
    <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");
  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });
  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });
  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</html>
