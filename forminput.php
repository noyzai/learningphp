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
    <!-- Form Input Profil Karyawan  -->
    <<form action="insert_profile.php" method="post">
        <table align="center">
            <tr>
                <td colspan="3"><h3>From Input Profile</h3></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" cols="30" rows="5"></textarea></td>
            </tr>
            
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telp"></td>
            </tr>

            <tr>
                <td colspan="3"><input type="submit" name="submit" value="Simpan"></td>
            </tr>

        </table>

    </form>

</body>
</html>