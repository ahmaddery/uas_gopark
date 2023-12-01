<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - GoPark</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/service.css') ?>">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.html">GoPark</a>
        </div>
        <ul class="nav-links">
            <li><a href="<?= site_url('scroll') ?>">Home</a></li>
            <li><a href="<?= site_url('about') ?>">About</a></li>
            <li><a href="<?= site_url('contact') ?>">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-card">
                <img src="<?= base_url('assets/images/slot_parkir.jpg') ?>" alt="Parking Spot" width="150" height="150" />
                <h3>Parking Spots</h3>
                <p>GoPark memberikan pengalaman parkir yang lebih baik dan terorganisir dengan tersedianya informasi tentang ketersediaan slot parkir secara real-time</p>
            </div>
            <div class="service-card">
                <img src="<?= base_url('assets/images/valet_parking.jpg') ?>" alt="Valet Parking" width="150" height="150" />
                <h3>Valet Parking</h3>
                <p>Lengkapi pengalaman parkir Anda dengan layanan valet parking kami yang efisien, profesional, dan aman. Kami hadir untuk memberikan kemudahan dan kenyamanan dalam parkir kendaraan Anda.</p>
            </div>
            <div class="service-card">
                <img src="<?= base_url('assets/images/car_wash.jpg') ?>" alt="Car Wash" width="150" height="150" />
                <h3>Car Wash</h3>
                <p>"Biar kami yang menjaga kebersihan mobil Anda. Percayakan car wash terbaik hanya pada GoPark, untuk hasil yang bersih, segar, dan memikat hati."</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h4>About Us</h4>
              <p>Layanan parkir yang dapat diandalkan dan tepercaya.</p>
            </div>
            <div class="col-md-4">
              <h4>Contact Us</h4>
              <ul>
                <li><i class="fas fa-map-marker-alt"></i> Jl. Jend. Sudirman No. 123, yogyakarta</li>
                <li><i class="fas fa-phone"></i> +62 123 456 789</li>
                <li><i class="fas fa-envelope"></i> info@gopark.com</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h4>Follow Us</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="bottom-bar">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="footer-links">
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">FAQ</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <p>&copy; 2023 GoPark. All Rights Reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      
    <script src="app.js"></script>
</body>
</html>
