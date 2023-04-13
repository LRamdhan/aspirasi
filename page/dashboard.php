<?php

require("../func/autoload.php");

$auth->checkLogin();

$dataDashboard = $profile->dashboard($_COOKIE["sessionasp"]);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
        <h1 class="fs-4 mb-5">Selamat Datang <?= $dataDashboard["nama"] ?></h1>
        <h1 class="fs-5 mb-5"><?= $dataDashboard["jumlah"] ?> Total Aspirasi</h1>
        <h1 class="fs-5 mb-3">Aspirasi Terbaru</h1>
        <table class="table mb-5">
          <thead>
            <tr>
              <th scope="col">Judul</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php if(isset($dataDashboard["recent"])) : ?>
              <tr>
                <td><?= $dataDashboard["recent"]["judul"] ?></td>
                <td><?= $dataDashboard["recent"]["tanggal"] ?></td>
                <td><?= $dataDashboard["recent"]["status"] ?></td>
                <td><a href="detailaspirasi.php?id=<?= $dataDashboard["recent"]["id"] ?>">detail</a></td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
        <a href="tambahaspirasi.php"
          ><button class="button-dashboard py-3 p-4">
            TAMBAH ASPIRASI BARU
          </button></a
        >
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
