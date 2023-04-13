<?php

require("../func/autoload.php");

$auth->checkLogout();

if(isset($_POST["submit"])) { $result = $auth->login($_POST["npm"], $_POST["password"]); }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
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
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand fs-5" href="landing.php">ASPIRASI</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item fs-5">
              <a href="../../index.html"></a>
            </li>
            <li class="nav-item">
              <a></a>
            </li>
            <li class="nav-item">
              <a></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- login -->
    <section class="login py-5 text-center">
      <div class="container py-5">
        <div class="login-page py-4">
          <h1 class="py-5 fs-4">SILAHKAN LOGIN TERLEBIH DAHULU</h1>
            <?php if(isset($_POST["submit"]) && $result != 1) :
                echo "<p style=\"color: red;\">npm atau password salah</p>";
            endif;?>
          <form action="" method="post">
              <div class="row">
                <div class="col-8 offset-2 offset mb-4">
                  <input
                    type="text"
                    placeholder="npm"
                    class="form-control form-control-lg fs-6 border-0 shadow-sm"
                    name="npm"
                  />
                </div>
              </div>
    
              <div class="row">
                <div class="col-8 offset-2 offset mb-4">
                  <input
                    type="password"
                    placeholder="password"
                    class="form-control form-control-lg fs-6 border-0 shadow-sm"
                    name="password"
                  />
                </div>
              </div>
    
              <div class="row py-3">
                <div class="col-12">
                    <button type="submit" name="submit" class="button-login py-2">
                      LOGIN
                    </button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </section>
    <!-- login end -->

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
