<?php

require("../../func/user/autoload.php");

$auth->checkLogout();

if(isset($_POST["submit"])) { $result = $auth->login($_POST["email"], $_POST["password"]); }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>login</h1>
    <?php if(isset($_POST["submit"]) && $result != 1) :
        echo "<p style=\"color: red;\">email atau password salah</p>";
    endif;?>
    <form action="" method="post">
        <label for="email">email</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">password</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit" name="submit">login</button>
        <p>belum punya akun? <a href="registrasi.php">registrasi</a></p>
    </form>
</body>
</html>