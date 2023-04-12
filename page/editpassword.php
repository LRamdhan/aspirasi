<?php

require("../func/autoload.php");

if(isset($_POST["ubah"])) {
    $result = $profile->editPassword($_POST["oldPassword"], $_POST["newPassword"]);
    if($result === 1) {
        $path = Database::$path;
        header("Location: $path" . "page/profile.php?editpass=$result");
        die;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit password</title>
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <?php require("navbar.php"); ?>
    <h1>ubah password</h1>
    <br><br>
    <?php if(isset($result) && $result === 0) { echo '<p style="color: red;">konfirmasi salah</p><br>'; } ?>
    <form action="" method="post">
        <label for="newPassword">password baru</label>
        <input type="password" id="newPassword" name="newPassword">
        <br><br>
        <label for="oldPassword">konfirmasi</label>
        <input type="password" id="oldPassword" name="oldPassword">
        <br><br>
        <button type="submit" name="ubah">ubah</button>
    </form>
</body>
</html>