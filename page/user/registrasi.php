<?php

require("../../func/user/autoload.php");

$auth->checkLogout();

if(isset($_POST["submit"])) { $result = $auth->register($_POST["email"], $_POST["password"], $_POST["nama"], $_POST["kelas"], $_POST["fakultas"]); }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
</head>
<body>
    <h1>registrasi</h1>
    <?php if(isset($_POST["submit"]) && $result != 1) :
        echo "<p style=\"color: red;\">pastikan data valid</p>";
    endif;?>
    <form action="" method="post">
        <label for="email">email</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">password</label>
        <input type="password" id="password" name="password">
        <br>
        <label for="nama">nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="kelas">kelas</label>
        <input type="text" id="kelas" name="kelas">
        <br>
        <label for="fakultas">fakultas</label>
        <input type="text" id="fakultas" name="fakultas">
        <br>
        <button type="submit" name="submit">registrasi</button>
        <p>sudah punya akun? <a href="login.php">login</a></p>
    </form>
</body>
</html>