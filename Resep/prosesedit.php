<?php 
    session_start();

    if( !isset($_SESSION['login']) ) {
        header("Location: index.php?pesan=belum_login");
        exit;
    }

    include 'koneksi.php';

    $id_resep = $_POST['id_resep'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $waktu = $_POST['waktu'];
    $bahan = $_POST['bahan'];
    $langkah = $_POST['langkah'];

    $query = mysqli_query($konek,"UPDATE dataresep SET judul='$judul', kategori='$kategori', waktu='$waktu', bahan='$bahan', langkah='$langkah'
    WHERE id_resep='$id_resep'");
    if($query)
    {
        echo "<SCRIPT>
        alert('Data Berhasil Diubah')
        window.location.replace('output.php');
        </SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>
        alert('Data Gagal Diubah')
        window.location.replace('output.php');
        </SCRIPT>";
    }
?>