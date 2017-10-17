<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Karyawan</title>

    <link rel="stylesheet" href="style/pure-min.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">

</head>
<body style="width:600px; margin:0 auto;">

    <form class="pure-form" action="insert_karyawan.php" method="post" encytipe="multipartform-data">
        <fieldset>
            <legend><h3>Form Input Karyawan</h3></legend>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>&nbsp; :&nbsp;</td>
                    <td><input type="text" placeholder="Masukkan nama lengkap Anda" size="30" name="nama"></td>
                </tr>

                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>&nbsp; :&nbsp;</td>
                    <td><input type="text" placeholder="Jakarta, 30 Oktober 2014" size="30" name="tempat_tanggal_lahir"></td>
                </tr>
                    <td>Jenis Kelamin</td>
                    <td>&nbsp; :&nbsp;</td>
                    <td>
                        <input type="radio" value="Laki-laki" name="Jenis Kelamin">Laki-Laki
                        <input type="radio" value="Perempuan" name="Jenis Kelamin">Perempuan
                    </td>
               

                <tr>
                    <td>Agama</td>
                    <td>&nbsp; :&nbsp;</td>
                    <td><input type="text" placeholder="Masukkan Agama Anda" size="30" name="agama"></td>
                </tr>

                <tr>
                    <td>Telepon</td>
                    <td>&nbsp; :&nbsp;</td>
                    <td><input type="text" placeholder="Masukkan noor telepon Anda" size="30" name="no_tlp"></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>&nbsp; :&nbsp;</td>
                    <td><textarea name="alamat" id="" rows="5" cols="31"></textarea>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>&nbsp; :&nbsp;</td>
                    <td>
                        <select name="divisi">
                            <option value="HRD">HRD</option>
                            <option value="Administrasi dan Keuangan">Administrasi dan Keuangan</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Produksi">Produksi</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Photo</td>
                    <td>&nbsp; :&nbsp;</td>
                    <td><input type="file" name="photo"></td>
                </tr>

                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>

                <tr>
                    <td colspan="3"><button type="submit" class="pure-button pure-button-primary">Simpan</button> </td>
                </tr>

            </table>            
        </fieldset>
    </form>

<?php
    //KODE UNTUK MENAMPILKAN PESAN STATUS
    if(isset($_GET['status'])) {
        $status=$GET['status'];
        switch($status) {
            case 0:
                echo "upload sukses! <br><br>";
                echo "<a class='pure-button' href='data_karyawan.php'>
                      <i class='fa fa-eye fa-lg'></i>
                      Lihat Data
                      </a>";
                break;
            case 1:
                echo "Anda belu memilih file yang akan diupload";
                break;
            case 2:
                echo "Upload gagal, Format yang diperbolehkan hanya jpg, png dan gif!";
                break;
            case 3:
                echo "Upload gagal, Ukuran file terlalu besar! maksimal 50kb";
                break;
        }
    }
?>

    
</body>
</html>