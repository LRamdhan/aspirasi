<?php
require("func/autoload.php");

$auth->checkLogin();

if(!isset($_POST["page"]) || $_POST["page"] < 0) { $_POST["page"] = 0; }
if(!isset($_POST["order"])) { $_POST["order"] = "asc"; }
if(!isset($_POST["status"])) { $_POST["status"] = ""; }
$data = $aspirasi->selectAspirasi($_POST["page"], $_POST["order"], $_POST["status"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aspirasi</title>
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <?php require("page/navbar.php"); ?>
    <h1>aspirasi</h1>
    <br><br>
    <?php if(isset($data["error"])) { echo "<p style=\"color: red;\">terjadi masalah</p>"; }?>
    <form action="" method="post" id="filter">
        <?php if($_POST["order"] === "asc") : ?>
            <input type="radio" name="order" id="asc" value="asc" checked>
            <label for="asc">asc</label>
            <input type="radio" name="order" id="desc" value="desc">
            <label for="desc">desc</label>
        <?php else : ?>
            <input type="radio" name="order" id="asc" value="asc">
            <label for="asc">asc</label>
            <input type="radio" name="order" id="desc" value="desc" checked>
            <label for="desc">desc</label>
        <?php endif; ?>
        <select name="status" id="status">
            <option value="">semua</option>
            <option value="terkirim">terkirim</option>
            <option value="diproses">diproses</option>
            <option value="selesai">selesai</option>
        </select>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>judul</th>
                <th>fakultas</th>
                <th>tanggal</th>
                <th>status</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row) : ?>
                <tr>
                    <td><?= $row["judul"] ?></td>
                    <td><?= $row["fakultas"] ?></td>
                    <td><?= $row["tanggal"] ?></td>
                    <td><?= $row["status"] ?></td>
                    <td><a href="page/detailaspirasi.php?id=<?= $row["id"] ?>">detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <span><button type="submit" name="page" form="filter" value="<?= $_POST["page"] - 10 ?>">&laquo; previous</button></span>
    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span><button type="submit" name="page" form="filter" value="<?= $_POST["page"] + 10 ?>">next &raquo;</button></span>
    <script>
        const form = document.getElementById("filter");
        const radio = Array.from(form.querySelectorAll("input[type=radio]"));
        radio.forEach(el => el.addEventListener('input', event => form.submit()));
        const select = form.querySelector("#status");
        select.value = "<?= $_POST["status"] ?>";
        select.addEventListener('change', event => form.submit());
    </script>
</body>
</html>