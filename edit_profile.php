<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From Input Profile</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

</head>
<body>
    <!-- From Edit Profile Karyawan -->

    <?php
    include "koneksi.php";
    $id_profile = $_GET['id_profile'];
    $query = "SELECT * FROM profile WHERE id_profile='$id_profile'";
    $sql = mysql_query($query) or die(mysql_error());

    while($data=mysql_fetch_array($sql)) {
        $id_profile = $data['id_profile'];
        $nama       = $data['nama'];
        $jenis_kelamin= $data['jenis_kelamin'];
        $alamat     = $data['alamat'];
        $no_telp    = $data['no_telp'];

    ?>
</body>
</html>