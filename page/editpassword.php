<?php

require("../func/autoload.php");

if(isset($_POST["ubah"])) {
    $result = $profile->editPassword($_POST["oldPassword"], $_POST["newPassword"]);
    if($result === 1) {
        $path = Database::$path;
        header("Location: $path" . "page/profile.php?editpass=$result");
        die;
    }
}

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
            <form action="" method="post">
                <div class="row pb-5">
                  <div class="col-6">
                      <h1 class="fs-4"><b>UBAH PASSWORD</b></h1>
                  </div>
                </div>
    
                <?php if(isset($result) && $result === 0) { echo '<p style="color: red;">konfirmasi salah</p><br>'; } ?>
    
                <div class="row">
                <div class="col-6 mb-3">
                    <input
                    style="background-color: #659dbb5e"
                    type="password"
                    placeholder="PASSWORD BARU"
                    class="form-control form-control-lg fs-6 border-0 shadow-sm"
                    name="newPassword"
                    />
                </div>
                </div>
                
                <div class="row">
                <div class="col-6 mb-3">
                    <input
                    style="background-color: #659dbb5e"
                    type="password"
                    placeholder="PASSWORD"
                    class="form-control form-control-lg fs-6 border-0 shadow-sm"
                    name="oldPassword"
                    />
                </div>
                </div>
    
    
                <div class="row">
                <div class="col-6 offset-3">
                    <a href="profile.html"
                    ><button
                        style="background-color: #d9d9d9; width: 48%"
                        type="submit"
                        class="button-gambar p-3 border-0 shadow-sm"
                        name="ubah"
                    >
                        Simpan Perubahan
                    </button></a
                    >
                </div>
                </div>
            </form>
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
