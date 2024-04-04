<?php

    include 'koneksi.php';

    function registrasi($data) {
        global $konek;

        $username = $data['username'];
        $password = $data['password'];

        $usercheck = mysqli_query($konek, "SELECT username FROM account WHERE username = '$username'");

        if ( mysqli_fetch_assoc($usercheck) ) {
            echo "<center><h6 style='color: white;background-color: red;'>username sudah dipakai, mohon masukkan username lain.</h6></center>";
            return false;
        }

        $query = mysqli_query($konek, "INSERT INTO account VALUES ('', '$username', '$password')");

        return mysqli_affected_rows($konek);
    }

   
?>