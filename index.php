<?php

require("func/autoload.php");

$auth->checkLogin();

if((!isset($_GET["page"]) || $_GET["page"] < 1)) { $_GET["page"] = 1; }
if(!isset($_GET["direction"])) { $_GET["direction"] = "asc"; }
$aspirasi = $aspirasi->select($_GET["page"], $_GET["direction"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspirasi</title>
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <?php require("page/navbar.php"); ?>
    <h1>semua aspirasi</h1>
    <a href="page/tambahaspirasi.php">tambah aspirasi</a>
    <form action="" data-direction="<?= $_GET["direction"] ?>">
        <input type="radio" name="direction" id="asc" value="asc" se>
        <label for="asc">asc</label>
        <input type="radio" name="direction" id="desc" value="desc">
        <label for="desc">desc</label>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>judul</th>
                <th>tanggal</th>
                <th>status</th>
                <th>detail</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($aspirasi as $item) : ?>
                <tr>
                    <td><?= $item["judul"] ?></td>
                    <td><?= $item["tanggal"] ?></td>
                    <td><?= $item["status"] ?></td>
                    <td><a href="page/detailaspirasi.php?id=<?= $item["id"] ?>">detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table border="1" borde-spacing="0">
        <tr>
            <td><a href="?page=<?= $_GET["page"] - 1; ?>&direction=<?= $_GET["direction"] ?>">&laquo;</a></td>
            <td>&nbsp;</td>
            <td><a href="?page=<?= $_GET["page"] + 1; ?>&direction=<?= $_GET["direction"] ?>"">&raquo;</a> </td>
        </tr>
    </table>
    <script>
        const [form] = document.getElementsByTagName('form');
        const radio = Array.from(form.getElementsByTagName('input'));
        radio.forEach(el => {
            if(form.dataset.direction === el.value) el.checked = true;
            el.addEventListener('input', event => {
                form.action += `?direction=${event.target.value}`;
                form.submit();
            });
        });
    </script>
</body>
</html>