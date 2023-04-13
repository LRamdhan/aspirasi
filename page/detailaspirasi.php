<?php

require("../func/autoload.php");

$auth->checkLogin();

$result = !isset($_GET["id"]) ? 0 : $aspirasi->selectDetailAspirasi($_GET["id"]);

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

    <!-- detail aspirasi -->
    <section class="detail-aspirasi py-5">
      <div class="container py-5">
        <div class="detail-asp-page">
          <div class="row">
            <div class="col-6">
              <h1 class="fs-4 mb-5"><b>DETAIL ASPIRASI</b></h1>
              <?php if($result === 0) :
                  echo "<p style=\"color: red;\">terjadi kesalahan, silahkan coba lagi!</p>";
              endif;?>
            </div>
          </div>

          <div class="row">
            <div class="col-6 mb-3">
              <h1 class="fs-4">Status</h1>
              <h2 class="profile-form fs-5"><?= $result["status"] ?></h2>
            </div>
          </div>

          <div class="row">
            <div class="col-6 mb-3">
              <h1 class="fs-4">Tanggal</h1>
              <h2 class="profile-form fs-5"><?= $result["tanggal"] ?></h2>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-6">
              <h1 class="fs-4">Judul</h1>
              <h2 class="profile-form fs-5"><?= $result["judul"] ?></h2>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-6">
              <h1 class="fs-4">Deskripsi</h1>
              <h2 class="profile-form fs-5">
                <?= $result["deskripsi"] ?>
              </h2>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-6">
              <h1 class="fs-4">Gambar</h1>
                <?php if(strlen($result["gambar"]) === 0) : ?>
                    <p>tidak memiliki gambar</p>
                <?php else : ?>
                    <img width="450" src="../assets/img/<?= $result["gambar"] ?>" alt="">
                <?php endif; ?>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-6">
              <h1 class="fs-4">Pesan</h1>
              <?php if(strlen($result["pesan"]) === 0) : ?>
                  <p>belum ada pesan</p>
              <?php else : ?>
                  <h2 class="profile-form fs-5">
                    <?= $result["pesan"] ?>
                  </h2>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- detail aspirasi end -->

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