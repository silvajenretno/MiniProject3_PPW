<?php
     session_start();

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
        <title>MyRecipe | Bagikan Resep</title>

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

        <?php 
            include "koneksi.php";

            $judul = $_POST['judul'];
            $kategori = $_POST['kategori'];
            $waktu = $_POST['waktu'];
            $bahan = $_POST['bahan'];
            $langkah = $_POST['langkah'];

            $query=mysqli_query($konek, "INSERT INTO dataresep VALUES ('','$judul','$kategori','$waktu','$bahan','$langkah')")
            or die(mysqli_error($konek));

            if($query)
            {
                //upload gambar        
                echo '
                <center>
                    <div class="form-area" style="width: 50%; height: 50%;">
                        <form action="uploadfile.php" method="post" enctype="multipart/form-data">
                            <h2>Pilih File Gambar</h2>
                            <h6><i>format: .jpg, maksimum 10mb</i></h6>
                            <div class="form-control mt-30">
                                <input type="file" name="myfile" />
                                <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" size="10000000" />
                            </div>    
                            <input class="btn dwelling-btn" type="submit" value="Upload" />
                        </form>
                    </div>
                </center>';
            }
            else
            {
                echo "<SCRIPT>
                alert('Maaf, terjadi kesalahan. Resep gagal dibagikan.')
                window.location.replace('output.php');
                </SCRIPT>";
            }
        ?>
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