<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gopark</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/landing_page.css') ?>">
  </head>
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="./img/shape.png" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" />
              <h3>Gopark</h3>
            </div>

            <div class="links">
              <ul>
                <li><a href="<?= site_url('local/about') ?>">About</a></li>
                <li><a href="<?= site_url('local/service') ?>">Service</a></li>
    
                <li><a href="<?= site_url('login') ?>" class="btn">Login </a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Parkir Lebih Mudah </h1>
                <h1>Dengan Gopark.</h1>
              </div>
              <p class="text">
               Selamat Datang di GoPark - Solusi Terbaik untuk Kemudahan Parkir dan Pengalaman yang Aman!
              </p>
              <div class="cta">
                <a href="<?= site_url('register') ?>" class="btn">Daftar Sekarang</a>
              </div>
            </div>

            <div class="right">
              <img src="<?= base_url('assets/images/image_5.png') ?>" alt="foto kendaraan" class="person" />
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="<?= base_url('assets/js/landing_page.js') ?>"></script>
  </body>
</html>
