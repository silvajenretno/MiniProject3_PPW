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
    <title>MyRecipe | Detail Resep</title>

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
                        <a class="nav-brand" href="home.php"><img src="" alt=""></a>

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
    <center><hr width="90%"></center>
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/background/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Detail Resep</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

        <!-- Receipe Content Area -->

        <?php 
        include 'koneksi.php';
        $id_resep = $_GET['id_resep'];
        $query = mysqli_query($konek, "SELECT * FROM dataresep WHERE id_resep = '$id_resep'");
        while($data=mysqli_fetch_array($query))
        {
                        $gambar = $data['id_resep'];
                        $djudul = $data['judul'];
                        $dkategori = $data['kategori'];
                        $dwaktu = $data['waktu'] ." menit";
                        $dbahan = nl2br(htmlentities($data['bahan'], ENT_QUOTES, 'UTF-8'));
                        $dlangkah = nl2br(htmlentities($data['langkah'], ENT_QUOTES, 'UTF-8'));
                        $did = $data['id_resep'];
                        
        }?>

        <div class="recipe-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="recipe-headline my-5">
                            <center>
                                <h2><?php echo $djudul;?></h2>
                                <div>
                                    <?php echo '<img src="img/preview/preview('.$gambar.').jpg" width=300px>'; ?>
                                    <h4>Category: <?php echo $dkategori;?></h4>
                                    <div class="recipe-duration">
                                        <h6>Waktu: <?php echo $dwaktu;?></h6>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Langkah -->
                    <div class="col-12 col-lg-8">
                        <div class="preparation-step">
                            <h4>Langkah-Langkah</h4>
                            <div class="custom-control">
                                <p><?php echo $dlangkah;?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Bahan -->
                    <div class="col-12 col-lg-4">
                        <div class="ingredients">
                            <h4>Bahan</h4>
                            <div class="custom-control">
                                <p><?php echo $dbahan;?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <center>
                    <br>
                    <a href=edit.php?id_resep=<?php echo $did;?>><button class="btn dwelling-btn mt-100">EDIT RESEP</button></a>
                    <a href=hapus.php?id_resep=<?php echo $did;?>><button class="btn dwelling-btn mt-100">HAPUS RESEP</button></a>   
                </center>
            </div>
        </div>

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