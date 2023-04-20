<?php

require("../func/autoload.php");

$auth->checkLogin();

$result = 0;
if(isset($_POST["edit"])) {
   $result = $aspirasi->updateStatusAspirasi($_POST["id"], $_POST["status"], $_POST["pesan"]);
}

$data = $aspirasi->selectDetailAspirasi($_GET["id"]);

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
    <?php require("navbar.php") ?>
    <!-- navbar end -->

    <!-- detail aspirasi -->
    <section class="detail-aspirasi py-5">
      <div class="container py-5">
        <div class="detail-asp-page">
          <div class="row pb-5">
            <div class="col-6">
              <h1 class="fs-4"><b>DETAIL ASPIRASI</b></h1>
            </div>
          </div>

          <?php if(count($data) === 0) { echo "<p style=\"color: red;\">terjadi masalah</p>"; }?>

          <div class="row">
            <div class="col-6 mb-3">
              <h1 class="fs-4">Nama</h1>
              <h2 class="profile-form fs-5"><?= $data["nama"] ?></h2>
            </div>
          </div>

          <div class="row">
            <div class="col-6 mb-3">
              <h1 class="fs-4">Kelas</h1>
              <h2 class="profile-form fs-5"><?= $data["kelas"] ?></h2>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-6">
              <h1 class="fs-4">Fakultas</h1>
              <h2 class="profile-form fs-5"><?= $data["nama"] ?></h2>
            </div>
          </div>
          
          <div class="row mb-4">
            <div class="col-6">
              <h1 class="fs-4">Judul</h1>
              <h2 class="profile-form fs-5"><?= $data["judul"] ?></h2>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-6">
              <h1 class="fs-4">Deskripsi</h1>
              <h2 class="profile-form fs-5">
              <?= $data["deskripsi"] ?>
              </h2>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-6">
              <h1 class="fs-4">Gambar</h1>
                <?php if(strlen($data["gambar"]) === 0) : ?>
                    <p>tidak memiliki gambar</p>
                <?php else : ?>
                    <img width="450" src="../../assets/img/<?= $data["gambar"] ?>" alt="">
                <?php endif; ?>
            </div>
          </div>

          <?php if($result === -1) { echo "<p style=\"color: red;\">terjadi masalah</p>"; }?>
            <form action="" method="post" id="form">
                <div class="row mb-3">
                    <div class="col-6" style="display: flex">
                    <h1 class="fs-4 me-3">Status</h1>
                    <select
                        class="p-1"
                        style="
                        background-color: #d9d9d9;
                        border: none;
                        border-radius: 5px;
                        "
                        name="status"
                    >
                        <?php
                            $option = ["terkirim", "diproses", "selesai"];
                            $disabled = "disabled";
                            foreach($option as $opt) {
                                $selected = "";
                                if($data["status"] === $opt) {
                                    $disabled = "";
                                    $selected = "selected";
                                }
                                echo "<option value=\"$opt\" $disabled $selected>$opt</option>";
                            }
                        ?>
                    </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                    <textarea
                        style="background-color: #659dbb5e"
                        rows="5"
                        placeholder="PESAN"
                        class="form-control form-control-lg fs-6 border-0 shadow-sm"
                        name="pesan"
                    ><?= $data["pesan"] ?></textarea>
                    </div>
                </div>

                <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

                <div class="row">
                    <div class="col-8 offset-3" style="margin-left: 290px;">
                        <button
                            style="background-color: #d9d9d9;"
                            class="button-gambar p-3 border-0 shadow-sm"
                            type="submit"
                            name="edit"
                        >
                            Perbarui Aspirasi
                        </button>
                    </div>
                </div>
            </form>


        </div>
      </div>
    </section>
    <!-- detail aspirasi end -->

    <!-- contact -->
    <?php require("contact.php") ?>
    <!-- contact end -->

    <script src="/src/js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>