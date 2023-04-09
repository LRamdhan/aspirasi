<?php
    if(isset($_GET["logout"])) { $auth->logout(); }
?>

<nav>
  <ul>
    <li><a href="<?= Database::$path ?>page/dashboard.php">dashboard</a></li>
    <li><a href="<?= Database::$path ?>">aspirasi</a></li>
    <li><a href="?logout=1">logout</a></li>
  </ul>
</nav>