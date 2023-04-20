<?php

require("../func/autoload.php");

$auth->checkLogin();

$dataProfile = $profile->selectProfile($_COOKIE["sessionasp"]);

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

    <!-- profile -->
    <section class="profile py-5">
      <div class="container py-5">
        <div class="profile-page">
          <div class="row pb-5">
            <div class="col-6">
              <h1 class="fs-4"><b>PROFILE</b></h1>
            </div>
          </div>

          <?php if(isset($_GET["editpass"]) && $_GET["editpass"] == 1) { echo '<p style="color: green;">password berhasil diubah</p><br>'; } ?>

          <div class="row">
            <div class="col-6 mb-3">
              <h1 class="fs-4">Nama</h1>
              <h2 class="profile-form fs-5"><?= $dataProfile["nama"] ?></h2>
            </div>
          </div>

          <div class="row">
            <div class="col-6 mb-3">
              <h1 class="fs-4">NPM</h1>
              <h2 class="profile-form fs-5"><?= $dataProfile["npm"] ?></h2>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-6">
              <h1 class="fs-4">Kelas</h1>
              <h2 class="profile-form fs-5"><?= $dataProfile["kelas"] ?></h2>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-6">
              <h1 class="fs-4">Fakultas</h1>
              <h2 class="profile-form fs-5"><?= $dataProfile["fakultas"] ?></h2>
            </div>
          </div>
          
          <div class="row mb-4">
            <div class="col-6">
              <h1 class="fs-4">Password</h1>
              <h2 class="profile-form fs-5">********</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-8 offset-4">
              <a href="editpassword.php"
                ><button
                  style="background-color: #d9d9d9;"
                  class="button-gambar p-3 border-0 shadow-sm"
                >
                  Ubah Password
                </button></a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- profile end -->

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