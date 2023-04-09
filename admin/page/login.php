<?php

require("../func/autoload.php");

$auth->checkLogout();

$result = 1;
if(isset($_POST["login"])) {
    $result = $auth->login($_POST["username"], $_POST["password"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
</head>
<body>
    <h1>login</h1>
    <?php if($result === 0) : ?>
        <p style="color: red;">username atau password salah</p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <br>
        <button type="submit" name="login">login</button>
    </form>
</body>
</html>