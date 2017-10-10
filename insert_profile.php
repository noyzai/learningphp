<?php

include "koneksi.php";

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $query = "INSERT INTO Profile (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";
    $sql = mysql_query($query) or die (mysql_error());

    if ($sql) {
        echo "Berhasil Simpan
        <meta http-equiv='refresh' content='1;url=forminput.php'>
        ";
    }
    else      {
                echo "Gagal Simpan <meta http-equiv='refresh' content='1;url=data_profile.php'>
        ";
    }


?>