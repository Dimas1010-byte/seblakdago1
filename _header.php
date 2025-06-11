<?php
// layout/_header.php

$currentUrl = $_SERVER['REQUEST_URI'];
?>

<style>
  .nav-link.active {
    background-color: #bb2d3b;
    border-radius: 10px;
    color: white !important;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/web/seblak/dashboard/dashboarduser.php">
      <img src="../assets/img/logoo.png" style="height:50px;width:auto;max-width:70px;vertical-align:middle;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav">
        <?php if ($_SESSION['role'] === 'admins'): ?>
          <li class="nav-item">
            <a class="nav-link <?= strpos($currentUrl, 'dashboardadmin.php') !== false ? 'active' : '' ?>" href="http://localhost/web/seblak/dashboard/dashboardadmin.php">
              <i class="fas fa-tachometer-alt"></i> Dashboard Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= strpos($currentUrl, 'datapesanan.php') !== false ? 'active' : '' ?>" href="http://localhost/web/seblak/dashboard/datapesanan.php">
              <i class="fas fa-list"></i> Data Pesanan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= strpos($currentUrl, 'grafik.php') !== false ? 'active' : '' ?>" href="http://localhost/web/seblak/dashboard/grafik.php">
              <i class="fas fa-chart-bar"></i> Data Penjualan
            </a>
          </li>
        <?php elseif ($_SESSION['role'] === 'users'): ?>
          <li class="nav-item">
            <a class="nav-link <?= strpos($currentUrl, 'dashboarduser.php') !== false && !isset($_GET['menu']) ? 'active' : '' ?>" href="http://localhost/web/seblak/dashboard/dashboarduser.php">
              <i class="fas fa-home"></i> Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= strpos($currentUrl, '#menu') !== false ? 
            'active' : '' ?>" href="http://localhost/web/seblak/dashboard/dashboarduser.php#menu">
              <i class="fas fa-utensils"></i> Menu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= strpos($currentUrl, 'menu.php') !== false ? 'active' : '' ?>" href="http://localhost/web/seblak/root/menu.php">
              <i class="fas fa-shopping-cart"></i> Pesan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= strpos($currentUrl, '#about') !== false ? 'active' : '' ?>" href="http://localhost/web/seblak/dashboard/dashboarduser.php#about">
              <i class="fas fa-info-circle"></i> Tentang Kami
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= strpos($currentUrl, '#contact') !== false ? 'active' : '' ?>" href="http://localhost/web/seblak/dashboard/dashboarduser.php#contact">
              <i class="fas fa-phone"></i> Kontak
            </a>
          </li>
        <?php endif; ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle"></i>
            <?php if (isset($_SESSION['login'])) echo htmlspecialchars($_SESSION['login']['nama']); ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="http://localhost/web/seblak/root/login.php">
                <i class="fas fa-sign-out-alt text-danger"></i> Logout
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
