<?php

include "koneksi.php";
$id_profile = $_GET['id_profile'];
$query = "DELETE from profile where id_profile ='$id_profile'";
$simpan = mysql_query($query) or die (mysql_error());


if($simpan) {
    echo "<script type='text/javascript'>
            alert ('Anda ingin menghapus data ?')
          </script>
          <meta http-equiv='refresh' content='0;url=data_profile.php'>
    ";}
    else {
        echo "gagal hapus";}

?>