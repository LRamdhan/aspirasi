<?php
    if(isset($_GET["logout"])) { $auth->logout(); }
?>

<nav>
  <ul>
    <li><a href="<?= Database::$path ?>page/user/dashboard.php">dashboard</a></li>
    <li><a href="<?= Database::$path ?>">semua aspirasi</a></li>
    <li><a href="<?= Database::$path ?>page/user/profile.php">profile</a></li>
    <li><a href="?logout=1">logout</a></li>
  </ul>
</nav>