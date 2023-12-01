<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoPark | Parkir</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/swiper-bundle.min.css') ?>">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style_scroll.css') ?>">


    <!-- CodeIgniter CSRF Token -->
    <script>
        var csrfToken = '<?= csrf_hash() ?>';
    </script>
</head>
<body>

    <div class="v16_62">
<?php if (session()->get('isLoggedIn')) : ?>
    <a href="<?= site_url('logout') ?>"><button class="v25_226">Logout</button></a>
<?php endif; ?>

        <a href="<?= site_url('about') ?>"><button class="About">About</button></a>
        <a href="<?= site_url('service') ?>"><button class="service">Service</button></a>
        <a href="<?= site_url('contact') ?>"><button class="contact">Contact</button></a>
        <form class="search-form" action="hasil-pencarian.php" method="GET">
  <input type="text" placeholder="Search..." name="query">
  <button type="submit">Search</button>
</form>

    </div>

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <?php foreach ($parkir as $parkirItem): ?>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="<?= base_url('upload/' . $parkirItem['foto']) ?>" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name"><?= $parkirItem['pemilik_parkir'] ?></h2>
                            <p class="description"><?= $parkirItem['deskripsi'] ?></p>
                            <a class="button" href="<?= site_url('checkout') ?>">Pesan Sekarang</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
    
    <footer>
        <div class="footer-left">
            <img src="<?= base_url('assets/images/logo_gopark.png') ?>" alt="Gopark Logo">
            <p>Tentang Kami</p>
        </div>
        <div class="footer-center">
            <h3>Metode Pembayaran</h3>
            <div class="payment-methods">
                <img src="<?= base_url('assets/images/bca.png') ?>" alt="BCA">
                <img src="<?= base_url('assets/images/bni.png') ?>" alt="BNI">
                <img src="<?= base_url('assets/images/bri.png') ?>" alt="BRI">
                <img src="<?= base_url('assets/images/dana.png') ?>" alt="DANA">
                <img src="<?= base_url('assets/images/danamon.png') ?>" alt="DANAMON">
                <img src="<?= base_url('assets/images/gopay.png') ?>" alt="GOPAY">
                <img src="<?= base_url('assets/images/linkaja.png') ?>" alt="LINK AJA">
                <img src="<?= base_url('assets/images/ovo.png') ?>" alt="OVO">
                <img src="<?= base_url('assets/images/shoppepay.png') ?>" alt="SHOPPEPAY">
            </div>
        </div>
        <div class="footer-right">
            <h3>Layanan Pelanggan</h3>
            <ul>
                <li><a href="mailto:customer@gopark.com"><i class="fas fa-envelope"></i> customer@gopark.com</a></li>
                <li><a href="https://wa.me/1234567890"><i class="fab fa-whatsapp"></i> 1234567890</a></li>
            </ul>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
    <!-- JavaScript -->
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>
