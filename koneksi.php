<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //deklarasi variabel
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'db_sekolah';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
    if($connection) {
        echo "Koneksi Berhasil!";
    } else {
        echo "Koneksi Gagal! : ". mysqli_connect_error();
    }
    
    ?>
</body>
</html>