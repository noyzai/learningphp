<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
</head>
<body style="width:500px; margin:0 auto">

    <div class="pure-g">
    <div class="pure-u-5-5">
        <form class="pure-form" method="post" id="form1" enctype="multipart/form-data" action="photo_action.php">
        <fieldset>
            <legend><h3>Upload Photo</h3></legend>
            <input type="file" name="nama_file">
            <button type="submit" class="pure-button pure-button-primary">Upload</button>
        </fieldset>
        </form>
    </div>
    </div>
    
<?php
    // KODE UNTUK MENAMPILKAN PESAN STATUS 
    if(isset($_GET['status'])) {
        $status=$_GET['status'];
        switch($status) {
            case 0:
                echo "upload sukses";
                break;
            case 1:
                echo "Anda belum memilih file yang akan diupload";
                break;
            case 2:
                echo "upload gagal, Format yang diperbolehkan hanya jpg, png dan gif";
                break;
            case 3:
                echo "upload gagal, Ukuran file terlalu besar! maksimal 50kb";
                break;
        }
    }
?>

<?php //include file photo_view.php"
include('photo_view.php')
?>

</body>
</html>