<?php
require("func/autoload.php");

$auth->checkLogin();

if(!isset($_POST["page"]) || $_POST["page"] < 0) { $_POST["page"] = 0; }
if(!isset($_POST["order"])) { $_POST["order"] = "desc"; }
if(!isset($_POST["status"])) { $_POST["status"] = ""; }
$data = $aspirasi->selectAspirasi($_POST["page"], $_POST["order"], $_POST["status"]);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- navbar -->
    <?php require("page/navbar.php"); ?>
    <!-- navbar end -->

    <!-- detail aspirasi -->
    <section class="semua-aspirasi py-5">
      <div class="container py-5">
        <div class="semua-asp-page">
          <h1 class="fs-4 mb-5"><b>SEMUA ASPIRASI</b></h1>
          <?php if(isset($data["error"])) { echo "<p style=\"color: red;\">terjadi masalah</p>"; }?>
            <form action="" method="post" id="filter">
                <div class="radio-button mb-3" style="display: flex">
                    <?php if($_POST["order"] === "asc") : ?>
                        <div class="form-check" style="margin-right: 20px;">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="order"
                            id="flexRadioDefault1"
                            value="desc"
                            />
                            <label class="form-check-label" for="flexRadioDefault1">
                            terbaru
                            </label>
                        </div>
                        <div class="form-check">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="order"
                            id="flexRadioDefault2"
                            value="asc"
                            checked
                            />
                            <label class="form-check-label me-2" for="flexRadioDefault2">
                            terdahulu
                            </label>
                        </div>
                    <?php else : ?>
                        <div class="form-check" style="margin-right: 20px;">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="order"
                            id="flexRadioDefault1"
                            value="desc"
                            checked
                            />
                            <label class="form-check-label" for="flexRadioDefault1">
                            terbaru
                            </label>
                        </div>
                        <div class="form-check">
                            <input
                            class="form-check-input"
                            type="radio"
                            name="order"
                            id="flexRadioDefault2"
                            value="asc"
                            />
                            <label class="form-check-label me-2" for="flexRadioDefault2">
                            terdahulu
                            </label>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-6 ms-3">
                        <select
                            class="p-1"
                            style="
                            background-color: #d9d9d9;
                            border: none;
                            border-radius: 5px;
                            "
                            name="status"
                            id="status"
                        >
                            <option value="">Semua</option>
                            <option value="terkirim">Terkirim</option>
                            <option value="diproses">Diproses</option>
                            <option value="selesai">Selesai</option>
                        </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Judul</th>
              <th scope="col">Fakultas</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $row) : ?>
                <tr>
                  <td><?= $row["judul"] ?></td>
                  <td><?= $row["fakultas"] ?></td>
                  <td><?= $row["tanggal"] ?></td>
                  <td><?= $row["status"] ?></td>
                  <td><a href="page/detailaspirasi.php?id=<?= $row["id"] ?>">detail</a></td>
                </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div style="display: flex; justify-content: center;">
            <button class="button-dashboard p-1 px-3" type="submit" name="page" form="filter" value="<?= $_POST["page"] - 10 ?>" style="margin-right: 20px;">
                &laquo;
            </button>
            <button class="button-dashboard p-1 px-3" type="submit" name="page" form="filter" value="<?= $_POST["page"] + 10 ?>">
                &raquo;
            </button>
        </div>
      </div>
    </section>
    <!-- detail aspirasi end -->

    <!-- contact -->
    <?php require("page/contact.php") ?>
    <!-- contact end -->

    <script>
        const form = document.getElementById("filter");
        const radio = Array.from(form.querySelectorAll("input[type=radio]"));
        radio.forEach(el => el.addEventListener('input', event => form.submit()));
        const select = form.querySelector("#status");
        select.value = "<?= $_POST["status"] ?>";
        select.addEventListener('change', event => form.submit());
    </script>
    <script src="/src/js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>