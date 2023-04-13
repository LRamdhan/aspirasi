<?php

require("../func/autoload.php");

$auth->checkLogin();

$data = $aspirasi->selectJumlah();
$admin = $aspirasi->selectAdmin($_COOKIE["aspadm"]);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- navbar -->
    <?php require("navbar.php"); ?>
    <!-- navbar end -->

    <!-- dashboard -->
    <section class="dashboard py-5">
      <div class="container py-5">
      <h1 class="fs-4 mb-5"><b>DASHBOARD</b></h1>
        <h1 class="fs-4 mb-5">Selamat Datang <?= $admin["username"] ?></h1>
        <h1 class="fs-5 mb-4"><?= $data["terkirim"] ?> Aspirasi Terkirim</h1>
        <h1 class="fs-5 mb-4"><?= $data["diproses"] ?> Aspirasi di Proses</h1>
        <h1 class="fs-5 mb-4"><?= $data["all"] ?> Aspirasi saat ini</h1>
      </div>
    </section>
    <!-- dashboard -->

    <!-- contact -->
    <?php require("contact.php"); ?>
    <!-- contact end -->

    <script src="/src/js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>