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
    <title>MyRecipe | Home</title>

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
                                    <li class="active"><a href="home.php">Home</a></li>
                                    <li><a href="home.php#about">Tentang Kami</a></li>
                                    <li><a href="#">Resep</a>
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
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide background" style="background-image: url(img/background/slide1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Jadilah Sang Professional</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Bukanlah hal yang mudah untuk menjadi koki yang handal. Maka dari itu, bergabunglah dengan kami dan bangun keterampilan memasakmu secara gratis mulai dari sekarang!</p>
                                <a href="output.php" class="btn dwelling-btn" data-animation="fadeInUp" data-delay="1000ms">Ayo Mulai Memasak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide background" style="background-image: url(img/background/slide2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Bagikan Resepmu ke Dunia</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Pernahkah kamu melakukan eksperimen dan menemukan sebuah masakan yang terasa sangat luar biasa untukmu? Jika ya, mungkin orang lain juga akan merasakan hal yang sama. Ayo bagikan resep terbaikmu!</p>
                                <a href="output.php" class="btn dwelling-btn" data-animation="fadeInUp" data-delay="1000ms">Ayo Mulai Memasak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide background" style="background-image: url(img/background/slide3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Sajikan Masakan Terbaik</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">Tak ada yang lebih enak daripada masakan yang dibuat dengan cinta, pilih resep yang kamu ingin dan berikan rasa terbaik untuk orang-orang yang kamu sayangi!</p>
                                <a href="output.php" class="btn dwelling-btn" data-animation="fadeInUp" data-delay="1000ms">Ayo Mulai Memasak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-area section-padding-80" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Apa itu <i>MyRecipe</i>?</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h6 class="sub-heading pb-5"><i>MyRecipe</i> merupakan sebuah penyedia layanan database resep makanan berbasis website.</h6>
                    <p class="text-center">
                        <i>MyRecipe</i> terdiri dari dua kata, yaitu "My" yang berarti milik saya dan "Recipe" yang berarti resep. 
                        Secara keseluruhan, MyRecipe adalah tempat di mana pengguna dapat berbagi resep masakan pribadi mereka dengan orang lain. 
                        Ini menciptakan kesempatan bagi pengguna untuk saling berbagi dan mencoba resep baru, serta memperluas selera kuliner mereka.
                        
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <img class="mb-70" src="img/background/about.png" alt="">
                    <p class="text-center">
                        Misi dari <i>MyRecipe</i> adalah untuk memberikan pengetahuan mengenai langkah-langkah membuat masakan dari berbagai dunia untuk para koki-koki rumahan yang ingin meningkatkan kemampuan memasak mereka ke level yang lebih tinggi.
                        <br><i>MyRecipe</i> menyediakan berbagai resep makanan dengan pembagian kategori menurut Three Set Course Meal, yaitu: <b>Appetizer</b> (Hidangan Pembuka), <b>Main Course</b> (Hidangan Utama), dan <b>Dessert</b> (Hidangan Penutup).
                    </p>
                </div>
            </div>

            <?php
            include 'koneksi.php';
            $totalapp = 0;
            $app = mysqli_query($konek, 'SELECT * FROM dataresep WHERE kategori = "Appetizer"');
            while($countapp=mysqli_fetch_array($app))
            {
                $totalapp ++;
            }

            $totalmc = 0;
            $mc = mysqli_query($konek, 'SELECT * FROM dataresep WHERE kategori = "Main Course"');
            while($countmc=mysqli_fetch_array($mc))
            {
                $totalmc ++;
            }

            $totaldes = 0;
            $des = mysqli_query($konek, 'SELECT * FROM dataresep WHERE kategori = "Dessert"');
            while($countdes=mysqli_fetch_array($des))
            {
                $totaldes ++;
            }
            ?>

            <div class="row align-items-center mt-70">
                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="single-cool-fact">
                        <img src="img/png/appetizer.png" alt="">
                        <h3><span class="counter"><?php echo $totalapp;?></span></h3> <!--menampilkan jumlah resep dengan kategori tersebut -->
                        <h6>Appetizer</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="single-cool-fact">
                        <img src="img/png/maincourse.png" alt="">
                        <h3><span class="counter"><?php echo $totalmc;?></span></h3>
                        <h6>Main Course</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-8 col-lg-4">
                    <div class="single-cool-fact">
                        <img src="img/png/dessert.png" alt="">
                        <h3><span class="counter"><?php echo $totaldes;?></span></h3>
                        <h6>Dessert</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
                <!-- Indeks 1,2,3 -->
    <section class="top-catagory-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Top Catagory Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-top-catagory">
                        <img src="img/background/top1.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Appetizer</h3>
                            <h6>Hidangan Pembuka</h6>
                            <a href='output.php?kategori="Appetizer"' class="btn dwelling-btn">Lihat Resep Appetizer</a>
                        </div>
                    </div>
                </div>
                <!-- Top Catagory Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-top-catagory">
                        <img src="img/background/top2.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Main Course</h3>
                            <h6>Hidangan Utama</h6>
                            <a href='output.php?kategori="Main Course"' class="btn dwelling-btn">Lihat Resep Main Course</a>
                        </div>
                    </div>
                </div>
                <!-- Top Catagory Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-top-catagory">
                        <img src="img/background/top3.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Dessert</h3>
                            <h6>Hidangan Penutup</h6>
                            <a href='output.php?kategori="Dessert"' class="btn dwelling-btn">Lihat Resep Dessert</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <section class="cta-area background bg-overlay" style="background-image: url(img/background/fren.jpeg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content text-center">
                        <h2>Bagikan Resep Masakanmu</h2>
                        <p>Jadilah sang koki inspirasional dengan membagikan resep masakan versimu sendiri ke dunia luas. Pengalamanmu akan tambah menyenangkan dengan adanya fitur komentar yang akan menunjukkan berapa banyak orang yang telah terbantu dengan resepmu, terlebih lagi kamu juga akan mendapat umpan balik dari mereka.</p>
                        <a href="form.php" class="btn dwelling-btn">Bagikan Resep</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-80" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Hubungi Kami</h3>
                        <br><br>
                        <p class="text-center">
                            Punya kritik, saran, atau butuh bantuan? Jangan ragu untuk menghubungi <i>MyRecipe</i> dengan cara mengirim pesanmu lewat formulir di bawah.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-area">
                        <form action="mailto:slvaajnn@gmail.com" method="post" enctype="text/plain">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="Nama" id="name" placeholder="Nama">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="Subject" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="Pesan" id="message" cols="30" rows="10" placeholder="Pesan"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn dwelling-btn mt-30" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info text-right">
                        <a href="https://youtube.com/@silvvaaa__?si=2TRw7t0GfwmfqRar" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/slvvaaa__?igsh=Z242NmJ2enBhajJu"  target="_blank"><i class="fa fa-instagram" aria-hidden="true""></i></a>
                    </div>
                    <!-- Copyright -->
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> MyRecipe Company All rights reserved</p>
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