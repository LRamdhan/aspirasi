<?php

require("../func/user/autoload.php");

$auth->checkLogin();

$result = isset($_POST["tambah"]) ? $aspirasi->insertAspirasi($_POST["judul"], $_POST["deskripsi"]) : 1;

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
    <h1>tambah aspirasi</h1>
    <?php if(isset($_POST["tambah"]) && $result != 1) :
        echo "<p style=\"color: red;\">terjadi kesalahan atau data tidak valid</p>";
    endif;?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="judul">judul</label>
        <input type="text" name="judul" id="judul">
        <br>
        <label for="deskripsi">deskripsi</label>
        <br>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        <br>
        <label for="gambar">gambar (opsional)</label>
        <input type="file" name="gambar" id="gambar">
        <br>
        <button type="submit" name="tambah">tambah aspirasi</button>
    </form>
</body>
</html>