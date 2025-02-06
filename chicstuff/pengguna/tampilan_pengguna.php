<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/branda.css">
    <title>Beranda</title>
    <style>
        .logoaja {
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
    header("location:login.php?pesan=gagal");
    }

    ?>

    <!--navbar-->
    <nav class="navbar">
        <div class="container">
            <div class="logoaja">
                <img src="../foto/logochicstuff.png" alt="chic stuff" width="4%">
            </div>
        </div>
    </nav>

    <!--sidebar-->
    <nav class="sidebar">
        <ul>
            <li>
                <a href="tampil_pengguna.php">
                    <i class="fas fa-align-justify"></i>
                    <span class="nav-item">Chic Stuff</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-search"></i>
                    <span class="nav-item">search</span>
                </a>
            </li>
            <li>
                <a href="form.php">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="nav-item">troli</span>
                </a>
            </li>
            <li>
                <a href="logout.php" class="logout">
                    <i class="fas fa-sign-out"></i>
                    <span class="nav-item">Log Out</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h1>Happy Shopping!!</h1>
        <div class="product-list">
            <div class="product-list-2">
                <div class="product">
                    <img src="../foto/gantungan.jpg" alt="gantungan">
                    <p class="product-name">[mintmatchs] NCT Keychain| <br>Forever Crush bag charm |<br> NCT DREAM </p>
                    <span class="price">Rp50.000</span>
                </div>
                <div class="product">
                    <img src="../foto/totebag.jpg" alt="totebag">
                    <p class="product-name">(palette) JOY Tote Bag <br> (+CUSTOM BORDIR)</p>
                    <span class="price">Rp68.999</span>
                </div>
                <div class="product">
                    <img src="../foto/jepitan.jpg" alt="jepit">
                    <p class="product-name">Pastel Star Jepit Rambut <br> Hairpin Y2k Bulu Merah Muta <br>Bintang</p>
                    <span class="price">Rp6.395</span>
                </div>
                <div class="product">
                    <img src="../foto/boneka kayu.jpg" alt="bonkay">
                    <p class="product-name">Boneka Kayu Menari Hiasan Meja</p>
                    <span class="price">Rp9.750</span>
                </div>
                <div class="product">
                    <img src="../foto/fake nails.jpg" alt="kuku">
                    <p class="product-name">fake nails panjang esthetic elegan </p>
                    <span class="price">Rp15.999</span>
                </div>
            </div>
            <div class="product-list-2">
                <div class="product">
                    <img src="../foto/boneka.jpg" alt="boneka">
                    <p class="product-name">Boneka Custom Bear <br> Hoodie Cute Lucu</p>
                    <span class="price">Rp30.500</span>
                </div>
                <div class="product">
                    <img src="../foto/gelang.jpg" alt="gelang">
                    <p class="product-name">Gelang Manik/ Beaded <br> Bracelet/ Gelang Rainbow Milly</p>
                    <span class="price">Rp4.000</span>
                </div>
                <div class="product">
                    <img src="../foto/cincin.jpg" alt="cincin">
                    <p class="product-name">Beads Ring Clear ||<br> Beads Ring Putih Susu <br>|| Cincin manik Korea</p>
                    <span class="price">Rp2.950</span>
                </div>
                <div class="product">
                    <img src="../foto/sendal.jpg" alt="sendal">
                    <p class="product-name">Sendal Selop Wanita <br>Karakter Anti Slip</p>
                    <span class="price">Rp32.000</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>