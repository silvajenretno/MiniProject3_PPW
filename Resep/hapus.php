<?php
    session_start();

    if( !isset($_SESSION['login']) ) {
        header("Location: index.php?pesan=belum_login");
        exit;
    }
    
    include 'koneksi.php';
    $id_resep = $_GET['id_resep'];

    $query = mysqli_query($konek,"DELETE FROM dataresep WHERE id_resep = '$id_resep'");

    if($query)
    {
        echo "<SCRIPT>
        alert('Data berhasil dihapus')
        window.location.replace('output.php');
        </SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>
        alert('Maaf, terjadi kesalahan. Data gagal dihapus')
        window.location.replace('output.php');
        </SCRIPT>";
    }
?>