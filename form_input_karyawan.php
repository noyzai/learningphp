<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Karyawan</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body style="width:600px; margin:0 auto;">
    <form class="pure-form" method="post" action="insert_karyawan.php" encytipe="multipart/form-data">
        <fieldset >
            <legend><h3>Form Input Karyawan</h3></legend>
        
        <table>
            <tr>
                <td>Nama </td>
                <td>&nbsp; : &nbsp;</td>
                <td><input type="text" name="nama" placeholder="Masukkan nama lengkap Anda" size="30"></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir </td>
                <td>&nbsp; : &nbsp;</td>
                <td><input type="text" name="tempat_tanggal_lahir" placeholder="Bandung 17 Oktober 2017" size="30"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>&nbsp; : &nbsp;</td>
                <td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama </td>
                <td>&nbsp; : &nbsp;</td>
                <td><input type="text" name="agama" placeholder="Masukkan agama anda" size="30"></td>
            </tr>
            <tr>
                <td>Telepon </td>
                <td>&nbsp; : &nbsp;</td>
                <td><input type="text" name="no_tlp" placeholder="Masukkan nomor telepon anda" size="30"></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td>&nbsp; : &nbsp;</td>
                <td><textarea name="alamat" cols="31" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Divisi </td>
                <td>&nbsp; : &nbsp;</td>
                <td>
                    <select name="divisi" id="">
                        <option value="HRD">HRD</option>
                        <option value="Administrasi dan Keuangan">Administrasi dan Keuangan</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Produksi">Produksi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Foto </td>
                <td>&nbsp; : &nbsp;</td>
                <td><input type="file" name="foto"></td>
            </tr>
            <tr>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" class="pure-button pure-button-primary">Simpan</button>
                </td>
            </tr>
        </table>
        </fieldset>
    </form>
    <?php
    //kode. untuk menampilkan pesan status
    if(isset($_GET['status'])){
        $status = $_GET['status'];
        switch ($status) {
            case 0:
                echo "Upload sukses! <br><br>";
                echo "<a class='pure-button' href='data_karyawan.php'>
                        <i class='fa fa-eye fa-lg'></i>
                        Lihat Data
                    </a>";
                break;
            case 1:
                echo "Anda Belum Memilih file yang akan di upload";
                break;
            case 2:
                echo "Upload gagal, format yang diperbolehkan hanya jpg.png dan gif";
                break;

            case 3:
                echo "Upload gagal, Ukuran file terlalu besar!! maksimal 50kb";
                break;
        }
    }
    ?>
</body>
</html>