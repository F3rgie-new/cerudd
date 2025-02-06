<!DOCTYPE html>
<html>
    <head>
        <title>tampilan</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
  <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <form action="tampil.php" method="get">
              <input type="text" name="cari" >
              <input type="submit" value="Cari" class="btn btn-primary">
            </form>
            </div>
        </div>
    </nav>
  
<!-- sidebar -->
<div class="sidebar">
    <div class="logo-details">
      
        <div class="logo_name">Y?</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Cari yu">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Pengguna</span>
       </a>
       <span class="tooltip">Pengguna</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="tabel.php">
         <i class='bx bx-folder' ></i>
         <span class="links_name">File Manager</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="webcam-toy-photo64.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Fadhilah Azzahra </div>
             <div class="job">XI RPL</div>
           </div>
         </div>
         <a href="logout.php" id="log_out"><i  class='bx bx-log-out'></i></a>
     </li>
    </ul>
  </div>
  <div class="container">

    <!-- <h1>Selamat Datang <?php session_start(); echo $_SESSION['username']; ?></h1> -->
      <h1>coba edit github</h1>
      <h1>coba push github</h1>
     <br>
     <br>
        <table border="1" class="table table-striped table-hover">
            <tr>
                <td>id</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Username</td>
                <td>Password</td>
                <td>action</td>
            </tr>

        <?php

        include 'conn.php';
        if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $query = mysqli_query($conn,"SELECT * FROM aktifitas WHERE nama like '%".$cari."%'");				
        }else{
          $query = mysqli_query($conn,"SELECT * FROM aktifitas");		
        }
            while ($hasil = mysqli_fetch_array($query)){
                ?>
 

        <tr>
            <td><?php echo $hasil['id']; ?></td>
            <td><?php echo $hasil['nama']; ?></td>
            <td><?php echo $hasil['email']; ?></td>
            <td><?php echo $hasil['username']; ?></td>
            <td><?php echo $hasil['password']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $hasil['id'] ?>"  class="btn btn-info">Edit</a>
                <a href="delet.php?id=<?php echo $hasil['id'] ?>" class="btn btn-warning">Hapus</a>
            </td>
        </tr>
        <?php } ?>
        </table>
        <a href="register.php" class="btn btn-secondary">Tambah</a>
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
