<?php

require("../func/autoload.php");

$auth->checkLogin();

$data = $aspirasi->selectJumlah();
$admin = $aspirasi->selectAdmin($_COOKIE["aspadm"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <?php require("navbar.php"); ?>
    <h1>dashboard</h1>
    <br><br>
    <h1>selamat datang <?= $admin["username"] ?></h1>
    <br>
    <h3><?= $data["terkirim"] ?> aspirasi terkirim</h3>
    <h3><?= $data["diproses"] ?> aspirasi diproses</h3>
</body>
</html>