<?php

require("../func/user/autoload.php");

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
    <?php if(isset($_POST["edit"]) && $result > 0) : 
        echo "<p style=\"color: green;\">data berhasil diubah</p>";
    endif;?>
    <input type="checkbox" id="edit">
    <label for="edit">edit</label>
    <button class="tbl-ubah" type="submit" name="edit" value="" id="tbl-ubah" form="form">ubah</button>
    <form action="" method="post" id="form">
        <br>
        <label for="nama">Nama</label>
        <br>
        <input type="text" name="nama" id="nama" value="<?= $dataProfile["nama"] ?>" disabled>
        <br><br>
        <label for="kelas">Kelas</label>
        <br>
        <input type="text" name="kelas" id="kelas" value="<?= $dataProfile["kelas"] ?>" disabled>
        <br><br>
        <label for="fakultas">Fakulatas</label>
        <br>
        <input type="text" name="fakultas" id="fakultas" value="<?= $dataProfile["fakultas"] ?>" disabled>
        <br><br>
    </form>
    <script>
        const [form] = document.getElementsByTagName('form');
        const input = Array.from(form.getElementsByTagName('input'));
        const edit = document.getElementById('edit');
        const tblUbah = document.getElementById('tbl-ubah');
        edit.addEventListener('input', event => {
            tblUbah.style.display = event.target.checked ? "inline" : "none";
            input.forEach(el => el.disabled = !event.target.checked);
            input[0].focus();
        });
    </script>
</body>
</html>