<?php

require("../func/autoload.php");

$auth->checkLogin();

$result = 0;
if(isset($_POST["edit"])) {
   $result = $aspirasi->updateStatusAspirasi($_POST["id"], $_POST["status"], $_POST["pesan"]);
}

$data = $aspirasi->selectDetailAspirasi($_GET["id"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah aspirasi</title>
    <link rel="stylesheet" href="../../css/navbar.css">
</head>
<body>
    <?php require("navbar.php"); ?>
    <h1>detail aspirasi</h1>
    <br><br>
    <?php if(count($data) === 0) { echo "<p style=\"color: red;\">terjadi masalah</p>"; }?>
    <h3><?= $data["nama"] ?></h3>
    <p>nama</p>
    <br>
    <h3><?= $data["kelas"] ?></h3>
    <p>kelas</p>
    <br>
    <h3><?= $data["fakultas"] ?></h3>
    <p>fakultas</p>
    <br><br><br>
    <h3><?= $data["tanggal"] ?></h3>
    <p>tanggal</p>
    <br>
    <h3><?= $data["judul"] ?></h3>
    <p>judul</p>
    <br>
    <h3>deskripsi : </h3>
    <p><?= $data["deskripsi"] ?></p>
    <br>
    <h3>gambar</h3>
    <?php if(strlen($data["gambar"]) === 0) : ?>
        <p>tidak memiliki gambar</p>
    <?php else : ?>
        <img width="300" src="../../img/<?= $data["gambar"] ?>" alt="">
    <?php endif; ?>
    <br>
    <br><br><br>
    <?php if($result === -1) { echo "<p style=\"color: red;\">terjadi masalah</p>"; }?>
    <input type="checkbox" id="edit" <?php if($data["status"] === "selesai") { echo "disabled"; } ?>>
    <label for="edit">edit</label>
    <button class="tbl-ubah" type="submit" name="edit" value="" id="tbl-ubah" form="form">ubah</button>
    <form action="" method="post" id="form">
        <label for="status">status</label>
        <select name="status" id="status" disabled>
            <?php
                $option = ["terkirim", "diproses", "selesai"];
                $disabled = "disabled";
                foreach($option as $opt) {
                    $selected = "";
                    if($data["status"] === $opt) {
                        $disabled = "";
                        $selected = "selected";
                    }
                    echo "<option value=\"$opt\" $disabled $selected>$opt</option>";
                }
            ?>
        </select>
        <br>
        <label for="pesan">pesan</label>
        <br>
        <textarea name="pesan" id="pesan" cols="30" rows="10" disabled><?= $data["pesan"] ?></textarea>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
    </form>
    <script>
        const [form] = document.getElementsByTagName('form');
        const edit = document.getElementById('edit');
        const tblUbah = document.getElementById('tbl-ubah');
        const status = document.getElementById('status');
        const pesan = document.getElementById('pesan');
        edit.addEventListener('input', event => {
            tblUbah.style.display = event.target.checked ? "inline" : "none";
            status.disabled = !event.target.checked;
            pesan.disabled = !event.target.checked;
        });
    </script>
</body>
</html>