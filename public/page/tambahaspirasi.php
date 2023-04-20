<?php

require("../func/autoload.php");

$auth->checkLogin();

$result = isset($_POST["tambah"]) ? $aspirasi->insertAspirasi($_POST["judul"], $_POST["deskripsi"]) : 1;

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
    <div class="tulis-aspirasi py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-8 offset-2">
            <h1 class="fs-4 mb-5"><b>TAMBAH ASPIRASI</b></h1>
            <?php if(isset($_POST["tambah"]) && $result != 1) :
                echo "<p style=\"color: red; text-align: center;\">terjadi kesalahan atau data tidak valid</p>";
            endif;?>
          </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="tulis-aspirasi-page py-3">
              <div class="row">
                <div class="col-8 offset-2 mb-3">
                  <input
                    style="background-color: #659dbb5e"
                    type="text"
                    placeholder="JUDUL LAPORAN"
                    class="form-control form-control-lg fs-6 border-0 shadow-sm"
                    name="judul"
                  />
                </div>
              </div>
    
              <div class="row">
                <div class="col-8 offset-2 mb-3">
                  <textarea
                    style="background-color: #659dbb5e"
                    rows="5"
                    placeholder="ISI LAPORAN.."
                    class="form-control form-control-lg fs-6 border-0 shadow-sm"
                    name="deskripsi"
                  ></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-8 offset-2 mb-3">
                  <input
                    style="background-color: #659dbb5e"
                    type="file"
                    placeholder="GAMBAR"
                    accept="image/jpeg, image/png, image/gif, image/svg+xml"
                    class="form-control form-control-lg fs-6 border-0 shadow-sm"
                    name="gambar"
                  />
                </div>
              </div>
    
    
              <div class="row">
                <div class="col-8 offset-2 mb-3" id="kirim">
                  <a href="aspirasi-terkirim.html"
                    ><button
                      type="submit"
                      class="button-gambar p-3 border-0 shadow-sm"
                      name="tambah"
                    >
                      KIRIM
                    </button></a
                  >
                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
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