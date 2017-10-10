<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Profile</title>
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
        $id_profile     = $data['id_profile'];
        $nama           = $data['nama'];
        $jenis_kelamin  = $data['jenis_kelamin'];
        $alamat         = $data['alamat'];
        $no_telp        = $data['no_telp'];
    
    ?>

    <form action="update_profile.php" method="post">
        <table align="center">
            <input type="hidden" name="id_profile" value="<?php echo "$id_profile"; ?>">
            <tr>
                <td colspan="3"><h3>From Edit Profile</h3></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo "$nama"; ?>"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</td>
                <td><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="" cols="30" rows="5"> <?php echo "$alamat"; ?></textarea></td>
            </tr>

            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp" value="<?php echo $no_telp; ?>"></td>
            </tr>

            <tr>
                <td colspan="3"><input type="submit" value="simpan"></td>
            </tr>

        </table>
    </form>

 <?php } ?>

    
</body>
</html>