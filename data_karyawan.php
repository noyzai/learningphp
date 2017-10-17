<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-center">Data Karyawan</h3>
    <table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Divisi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include("koneksi.php");
            $query= "SELECT * FROM karyawan";
            $sql = mysql_query($query);
            $no=1;
            while($data=mysql_fetch_array($sql)){
                $nomor_induk            = $data['nomor_induk'];
                $nama                   = $data['nama'];
                $tempat_tanggal_lahir   = $data['tempat_tanggal_lahir'];
                $jenis_kelamin          = $data['jenis_kelamin'];
                $agama                  = $data['agama'];
                $alamat                 = $data['alamat'];
                $no_tlp                 = $data['no_tlp'];
                $kode_divisi            = $data['kode_divisi'];
                $foto                   = $data['foto'];

                echo"
                    <tr>
                        <td>$no</td>
                        <td>$nomor_induk</td>
                        <td>$nama</td>
                        <td>$tempat_tanggal_lahir</td>
                        <td>$jenis_kelamin</td>
                        <td>$agama</td>
                        <td>$alamat</td>
                        <td>$no_tlp</td>
                        <td>$kode_divisi</td>
                        <td><center><img src='photo/$foto' width='100'height='100'></center</td>
                        <td>
                            <a href='form_edit_karyawan.php?nomor_induk=$nomor_induk'>Edit</a>
                            <a href='hapus_karyawan.php?nomor_induk=$nomor_induk'>Hapus</a>
                        </td>
                    </tr>
                ";
                $no++;
            }
        ?>
    </tbody>
    </table>
</body>
</html>