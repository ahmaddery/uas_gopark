<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - GoPark</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/contact.css') ?>">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="<?= site_url('index_view') ?>">GoPark</a>
        </div>
        <ul class="nav-links">
            <li><a href="<?= site_url('about') ?>">About</a></li>
            <li><a href="<?= site_url('service') ?>">Services</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <section class="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
            <?php endif; ?>

            <form action="<?= site_url('contact_us/saveContact') ?>" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="nama" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Enter subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
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
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Jend. Sudirman No. 123, Yogyakarta</li>
                        <li><i class="fas fa-phone"></i> +62 123 456 789</li>
                        <li><i class="fas fa-envelope"></i> info@gopark.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Follow Us</h4>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
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
