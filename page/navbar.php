<?php
    if(isset($_GET["logout"])) { $auth->logout(); }
?>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand fs-5" href="<?= Database::$path ?>page/dashboard.php">DASHBOARD</a>
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
      <div class="navbar-list mx-auto">
        <ul class="navbar-nav">
          <li class="nav-item me-2 fs-5">
            <a href="<?= Database::$path ?>">SEMUA ASPIRASI</a>
          </li>
          <li class="nav-item fs-5">
            <a href="<?= Database::$path ?>page/profile.php">PROFILE</a>
          </li>
          <li class="nav-item">
            <a></a>
          </li>
        </ul>
      </div>
      <svg
        width="15"
        height="23"
        viewBox="0 0 27 26"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M19.5667 1.8833C19.2219 1.37055 18.7086 1.03157 18.1397 0.940925C17.5709 0.850282 16.993 1.01541 16.5333 1.39997C16.0736 1.78453 15.7697 2.35704 15.6884 2.99153C15.6072 3.62603 15.7552 4.27055 16.1 4.7833L20 10.5833H2.66667C2.09203 10.5833 1.54093 10.8379 1.1346 11.2911C0.728273 11.7443 0.5 12.359 0.5 13C0.5 13.6409 0.728273 14.2556 1.1346 14.7088C1.54093 15.162 2.09203 15.4166 2.66667 15.4166H20H20.195L16.4683 21.3133C16.3021 21.573 16.1836 21.867 16.1197 22.1781C16.0558 22.4892 16.0479 22.8113 16.0962 23.1258C16.1445 23.4404 16.2483 23.7412 16.4014 24.0108C16.5545 24.2804 16.754 24.5135 16.9883 24.6966C17.3567 24.9834 17.7958 25.1354 18.245 25.1316C18.5887 25.1299 18.9272 25.0369 19.2323 24.8604C19.5375 24.6839 19.8006 24.429 20 24.1166L26.11 14.45C26.3812 14.0361 26.5273 13.5367 26.5273 13.0241C26.5273 12.5115 26.3812 12.0122 26.11 11.5983L19.5667 1.8833Z"
          fill="#231F20"
        />
      </svg>
      <svg
        width="10"
        height="20"
        viewBox="0 0 10 40"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M7.16626 0.666626H2.83293C2.25829 0.666626 1.70719 0.921239 1.30086 1.37445C0.894531 1.82766 0.66626 2.44235 0.66626 3.08329C0.66626 3.72423 0.894531 4.33892 1.30086 4.79213C1.70719 5.24535 2.25829 5.49996 2.83293 5.49996H4.99959V34.5H2.83293C2.25829 34.5 1.70719 34.7546 1.30086 35.2078C0.894531 35.661 0.66626 36.2757 0.66626 36.9166C0.66626 37.5576 0.894531 38.1723 1.30086 38.6255C1.70719 39.0787 2.25829 39.3333 2.83293 39.3333H7.16626C7.7409 39.3333 8.292 39.0787 8.69833 38.6255C9.10466 38.1723 9.33293 37.5576 9.33293 36.9166V3.08329C9.33293 2.44235 9.10466 1.82766 8.69833 1.37445C8.292 0.921239 7.7409 0.666626 7.16626 0.666626Z"
          fill="#231F20"
        />
      </svg>

      <a href="?logout=1" class="login fs-5">LOGOUT</a>
    </div>
  </div>
</nav>