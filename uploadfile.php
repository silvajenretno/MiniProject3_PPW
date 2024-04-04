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
	
        <?php 
			$uploadDir = "img/preview/";
			// Apabila ada file yang di-upload
			if(is_uploaded_file($_FILES['myfile']['tmp_name'])){

				$uploadFile = $_FILES['myfile'];

				// Extract nama file
				$extractFile = pathinfo($uploadFile['name']);
				$size = $_FILES['myfile']['size']; //untuk mengetahui ukuran file
				$tipe = $_FILES['myfile']['type'];// untuk mengetahui tipe file

				//Dibawah ini adalah untuk mengatur format gambar yang dapat di upload ke server.

				$exts =array('image/jpg','image/jpeg','image/pjpeg');
				if(!in_array(($tipe),$exts)){
					echo '
						<center>
							<div class="form-area" style="width: 50%; height: 50%;">
								<form action="uploadfile.php" method="post" enctype="multipart/form-data">
									<h6 style="color: white;background-color: red;">Format file yang di izinkan hanya JPG</h6><br><br>
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
					exit;
				}
				// dibawah ini script untuk mengatur ukuran file yang dapat di upload ke server
				if(($size !=0)&&($size>10000000)){
					echo '
						<center>
							<div class="form-area" style="width: 50%; height: 50%;">
								<form action="uploadfile.php" method="post" enctype="multipart/form-data">
									<h6 style="color: white;background-color: red;">Ukuran gambar terlalu besar</h6><br><br>
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
					exit;
				}
			}
			
			$sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
			$handle = opendir($uploadDir);
			while(false !== ($file = readdir($handle))){ // Looping isi file pada directory tujuan
				// Apabila ada file dengan awalan yg sama dengan nama file di uplaod
				if(strpos($file,'preview'.'('.$sameName.').') !== false)
				$sameName++; // Tambah data file yang sama
			}

			/* Apabila tidak ada file yang sama ($sameName masih '0') maka nama file pakai 
			* nama ketika diupload, jika $sameName > 0 maka pakai format "namafile($sameName).ext */
			$newName = 'preview'.'('.$sameName.').'.$extractFile['extension'];

			if(move_uploaded_file($uploadFile['tmp_name'],$uploadDir.$newName)){
				echo "<SCRIPT>
				alert('Resep berhasil dibagikan!')
				window.location.replace('output.php');
				</SCRIPT>";
			}
			else{
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