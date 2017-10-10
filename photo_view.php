<h2>File hasil upload photo</h2>

<?php

require_once ('koneksi.php');
$query  = "SELECT * FROM photo";
$result = mysql_query($query) or die(mysql_error());
$no=1;

//proses menampilkan data
while($rows=mysql_fetch_object($result)) {
?>
        <img src="photo/<?=$rows -> nama_file;?>" width="150" height="150" alt="">

<?php
}
?>