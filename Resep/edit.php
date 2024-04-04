<?php
    session_start();
    $username = $_SESSION['username'];

    if( !isset($_SESSION['login']) ) {
        header("Location: index.php?pesan=belum_login");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>MyRecipe | Edit Data Resep</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="img/png/apron.png"/>

        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <i class="circle-preloader"></i>
            <img src="img/png/apron.png" alt="">
        </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">

            <!-- Navbar Area -->
            <div class="main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="deliciousNav">

                            <!-- Logo -->
                            <a class="nav-brand" href="home.php"><img src="img/png/logo1.png" alt=""></a>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="home.php#about">Tentang Kami</a></li>
                                        <li class="active"><a href="#">Resep</a>
                                            <ul class="dropdown">
                                                <li><a href="output.php">Daftar Resep</a></li>
                                                <li><a href="form.php">Bagikan Resep</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="home.php#contact">Kontak</a></li>
                                        <li><?php echo "<h6>Hai, ".$username."!</h6>"?>
                                        <a style="background-color: black; color: white;" href=logout.php><i>LOG OUT</i></a></li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->
        
        <center>
            <hr width="90%">
            <!-- ##### Breadcumb Area Start ##### -->
            <a href="output.php">
                <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/background/breadcumb.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="breadcumb-text text-center">
                                    <h2>Edit Data Resep</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <!-- ##### Breadcumb Area End ##### -->

        <?php 
            include 'koneksi.php';
            $id_resep = $_GET['id_resep'];
            $data = mysqli_query($konek,"SELECT * FROM dataresep WHERE id_resep = '$id_resep'");
            while($hasil = mysqli_fetch_array($data)){
        ?>
        
        <div class="form-area mt-50" style="width: 50%;">
            <i style="color:blue;">NB: Foto Masakan tidak dapat diganti.</i><br><br>
            <form method="POST" action="prosesedit.php">
                <input type="hidden" name="id_resep" value="<?php echo $hasil['id_resep'];?>">
                    <h5 style="background-color: pink;">Judul Resep</h5>
                    <input class="form-control" type="text" name="judul" required value="<?php echo $hasil['judul'];?>" placeholder="nama makanan (contoh:Sirloin Steak, Nasi Liwet, atau lainnya)">
                    <h5 style="background-color: pink;">Kategori Resep</h5>
                    <select name="kategori">
                        <option value="<?php echo $hasil['kategori'];?>"><?php echo $hasil['kategori'];?> (awal)</option>
                        <option value="Appetizer">Appetizer</option>
                        <option value="Main Course">Main Course</option>
                        <option value="Dessert">Dessert</option>
                    </select>
                    <h5 style="background-color: pink;">Waktu Memasak</h5>
                    <input class="form-control" type="text" name="waktu" required value="<?php echo $hasil['waktu'];?>" placeholder="dalam satuan menit">
                    <h5 style="background-color: pink;">Bahan</h5> 
                    <textarea class="form-control" rows="5" cols="50" name="bahan" required placeholder="berikan tanda atau penomoran agar lebih mudah dipahami &#10; contoh:&#10;-cabai&#10;-bawang&#10;-gula"><?php echo $hasil['bahan'];?></textarea>
                    <h5 style="background-color: pink;">Langkah-Langkah</h4>
                    <textarea class="form-control" rows="10" cols="50" name="langkah" required placeholder="berikan tanda atau penomoran agar lebih mudah dipahami &#10; contoh:&#10;1.nyalakan api&#10;2.masukkan bahan&#10;3.sajikan"><?php echo $hasil['langkah'];?></textarea>
                
                <button type="submit" name="submit" class="btn dwelling-btn"><i>UBAH DATA RESEP</i></button>
            </form>
        </div>
        <?php } ?>

        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area mt-50">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Footer Social Info -->
                        <div class="footer-social-info text-right">
                            <a href="https://youtube.com/@silvvaaa__?si=2TRw7t0GfwmfqRar" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/slvvaaa__?igsh=Z242NmJ2enBhajJu"  target="_blank"><i class="fa fa-instagram" aria-hidden="true""></i></a>
                        </div>
                        <!-- Copyright -->
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dwelling Palate Company All rights reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ##### Footer Area End ##### -->

        <!-- ##### All Javascript Files ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>
    </body>
</html>