<?php

include "koneksi.php";

    $id_profile     = $_POST['id_profile'];
    $nama           = $_POST['nama'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $alamat         = $_POST['alamat'];
    $no_telp        = $_POST['no_telp'];


    $query = "UPDATE profile SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id_profile='$id_profile'";

    $sql = mysql_query($query) or die(mysql_error);

    if($sql) {
        echo "Berhasil Update <meta http-equiv='refresh' content='1; url=data_profile.php'>";
    }
    else {
        echo "Gagal Update";
    }

?>