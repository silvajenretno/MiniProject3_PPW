<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>MyRecipe | Log In</title>

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

    <center>
        <div style="background: url(img/background/signn.png);">
            <?php
                if(isset($_GET['pesan']))
                {
                    if($_GET['pesan'] == "gagal")
                    {
                        echo "<h6 style='color: white;background-color: red;'>Login gagal! Username dan Password tidak ditemukan!</h6>";
                    }
                    else if($_GET['pesan'] == "logout")
                    {
                        echo "<h6 style='color: white;background-color: blue;'>Anda telah berhasil Logout.</h6>";
                    }
                    else if($_GET['pesan'] == "belum_login")
                    {
                        echo "<h6 style='color: white;background-color: green;'>Anda harus Login untuk mengakses halaman admin.</h6>";
                    }
                }
                else
                {
                    echo "<h6 style='color: black;background-color: silver;'>Silahkan melakukan Log In.</h6>";
                }
                
            ?>
            <div class="dabox mt-50" style="width: 40%;">
                <img src="img/png/logo1.png" width=300px>
                
                <div class="form-area mt-15">
                    <form action="ceklogin.php" method="POST">
                        <h5 style="background-color: pink;">Username</h5>
                        <input class="form-control" type="text" name="username" placeholder="masukkan username">
                        <h5 style="background-color: pink;">Password</h5>
                        <input class="form-control" type="password" name="password" placeholder="masukkan password">
                        <button class="btn dwelling-btn mt-15" type="submit" name="login"><i>LOG IN</i></button>
                    </form>
                    <br>
                    <h5 class="mt-30" style="color: white;">Belum memiliki akun?</h5>
                    <a class="dalink" href=register.php>DAFTAR SEKARANG</button></a>
                </div>
            </div>
            <br><br><br>
        </div>
    </center>
    
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