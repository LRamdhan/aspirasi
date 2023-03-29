<?php

require("../func/autoload.php");

$auth->checkLogin();

if(!isset($_GET["id"])) {
    $result = 0;
} else {
    $result = $aspirasi->selectDetailAspirasi($_GET["id"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah aspirasi</title>
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <?php require("navbar.php"); ?>
    <h1>detail aspirasi</h1>
    <?php if($result === 0) :
        echo "<p style=\"color: red;\">terjadi kesalahan, silahkan coba lagi!</p>";
    endif;?>
    <br><br>
    <h3><?= $result["status"] ?></h3>
    <p>status</p>
    <br>
    <h3><?= $result["tanggal"] ?></h3>
    <p>tanggal</p>
    <br>
    <h3><?= $result["judul"] ?></h3>
    <p>judul</p>
    <br>
    <h3>deskripsi : </h3>
    <p><?= $result["deskripsi"] ?></p>
    <br>
    <h3>gambar</h3>
    <?php if(strlen($result["gambar"]) === 0) : ?>
        <p>tidak memiliki gambar</p>
    <?php else : ?>
        <img width="300" src="../img/<?= $result["gambar"] ?>" alt="">
    <?php endif; ?>
    <br>
    <h3>pesan</h3>
    <?php if(strlen($result["pesan"]) === 0) : ?>
        <p>belum ada pesan</p>
    <?php else : ?>
        <p><?= $result["pesan"] ?></p>
    <?php endif; ?>
</body>
</html>