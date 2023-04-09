<?php

require("../func/autoload.php");

$auth->checkLogin();

$dataDashboard = $profile->dashboard($_COOKIE["sessionasp"]);

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
    <h2>Selamat datang <?= $dataDashboard["nama"] ?></h2>
    <br><br>
    <h3>aspirasi terbaru</h3>
    <?php if($dataDashboard["recent"]) : ?>
        <table border="0">
            <tr>
                <td width="150"><?= $dataDashboard["recent"]["judul"] ?></td>
                <td width="150"><?= $dataDashboard["recent"]["tanggal"] ?></td>
                <td width="150"><a href="detailaspirasi.php?id=<?= $dataDashboard["recent"]["id"] ?>">detail</a></td>
            </tr>
        </table>
    <?php else : ?>
        <p>belum ada</p>
    <?php endif; ?>
    <br><br>
    <h3>total <?= $dataDashboard["jumlah"] ?> aspirasi</h3>
</body>
</html>