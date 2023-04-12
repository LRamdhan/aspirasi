<?php

require("../func/autoload.php");

$auth->checkLogin();

$result = isset($_POST["edit"]) ? $profile->updateProfile($_COOKIE["sessionasp"], $_POST["nama"], $_POST["kelas"], $_POST["fakultas"]) : 0;

$dataProfile = $profile->selectProfile($_COOKIE["sessionasp"]);

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
    <h1>profile</h1>
    <br><br>
    <?php if(isset($_GET["editpass"]) && $_GET["editpass"] == 1) { echo '<p style="color: green;">password berhasil diubah</p><br>'; } ?>
    <form action="" method="post" id="form">
        <br>
        <label for="nama">Nama</label>
        <br>
        <input type="text" name="nama" id="nama" value="<?= $dataProfile["nama"] ?>" disabled>
        <br>
        <br>
        <label for="npm">npm</label>
        <br>
        <input type="text" name="npm" id="npm" value="<?= $dataProfile["npm"] ?>" disabled>
        <br><br>
        <label for="kelas">Kelas</label>
        <br>
        <input type="text" name="kelas" id="kelas" value="<?= $dataProfile["kelas"] ?>" disabled>
        <br><br>
        <label for="fakultas">Fakulatas</label>
        <br>
        <input type="text" name="fakultas" id="fakultas" value="<?= $dataProfile["fakultas"] ?>" disabled>
        <br><br>
        <label for="fakultas">password</label>
        <br>
        <input type="password" name="fakultas" id="fakultas" value="jfisejaofeioa" disabled>
        <br><br>
    </form>
    <a href="editpassword.php">ubah password</a>
</body>
</html>