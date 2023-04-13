<?php

require("func/autoload.php");

$auth->checkLogin("page/landing.php");

if((!isset($_GET["page"]) || $_GET["page"] < 1)) { $_GET["page"] = 1; }
if(!isset($_GET["direction"])) { $_GET["direction"] = "desc"; }
$aspirasi = $aspirasi->select($_GET["page"], $_GET["direction"]);

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
            <div class="radio-button mb-3" style="display: flex; justify-content: space-between; align-items: flex-end;">
                <form action="" data-direction="<?= $_GET["direction"] ?>" class="direction" style="display: flex;">
                    <div class="form-check" style="margin-right: 20px;">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="direction"
                            id="flexRadioDefault2"
                            value="desc"
                        />
                        <label class="form-check-label" for="flexRadioDefault2">
                            terbaru
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="direction"
                            id="flexRadioDefault1"
                            value="asc"
                            checked
                        />
                        <label class="form-check-label me-2" for="flexRadioDefault1">
                            terdahulu
                        </label>
                    </div>
                </form>
                <a href="page/tambahaspirasi.php">
                    <button class="button-dashboard p-1 px-2">
                        TAMBAH ASPIRASI
                    </button>
                </a>
            </div>
        </div>

        <table class="table" style="margin-bottom: 15px;">
          <thead>
            <tr>
              <th scope="col">Judul</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($aspirasi as $item) : ?>
                <tr>
                    <td><?= $item["judul"] ?></td>
                    <td><?= $item["tanggal"] ?></td>
                    <td><?= $item["status"] ?></td>
                    <td><a href="page/detailaspirasi.php?id=<?= $item["id"] ?>">detail</a></td>
                </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div style="display: flex; justify-content: center;">
            <a href="?page=<?= $_GET["page"] - 1; ?>&direction=<?= $_GET["direction"] ?>" style="margin-right: 20px;">
                <button class="button-dashboard p-1 px-3">
                    &laquo;
                </button>
            </a>
            <a href="?page=<?= $_GET["page"] + 1; ?>&direction=<?= $_GET["direction"] ?>">
                <button class="button-dashboard p-1 px-3">
                    &raquo;
                </button>
            </a>
        </div>
      </div>
    </section>
    <!-- detail aspirasi end -->

    <!-- contact -->
    <?php require("page/contact.php") ?>
    <!-- contact end -->

    <script>
        const [form] = document.getElementsByTagName('form');
        const radio = Array.from(form.getElementsByTagName('input'));
        radio.forEach(el => {
            if(form.dataset.direction === el.value) el.checked = true;
            el.addEventListener('input', event => {
                form.action += `?direction=${event.target.value}`;
                form.submit();
            });
        });
    </script>
    <script src="/src/js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
