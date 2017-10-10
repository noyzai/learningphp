<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Profile</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
</head>
<body>

    <h1 align="center">Data Profile</h1>
    <!-- Tampilan Data Profile -->
    <table border="1" align="center">
        <tr>
            <td>Id Profile</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telpon</td>
            <td>Aksi</td>
        </tr>

        <?php
            include "koneksi.php";
            $query = "SELECT * FROM profile";
            $sql = mysql_query($query) or die (mysql_error());

            while($data=mysql_fetch_array($sql)) {
                $id_profile = $data['id_profile'];
                $nama       = $data['nama'];
                $jenis_kelamin= $data['jenis_kelamin'];
                $alamat     = $data['alamat'];
                $no_telp    = $data['no_telp'];
            
            echo "
                <tr>
                    <td>$id_profile</td>
                    <td>$nama</td>
                    <td>$jenis_kelamin</td>
                    <td>$alamat</td>
                    <td>$no_telp</td>
                    <td>
                        <a href='formedit_profile.php?id_profile=$id_profile'>Edit</a>
                        <a href='hapus_profile.php?id_profile=$id_profile'>Hapus</a>
                    </td>
                </tr>";
            }
        ?>

    </table>

    
</body>
</html>