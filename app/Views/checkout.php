<!DOCTYPE html>
<html>
<head>
  <title>GoPark - Check Out</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/checkout.css') ?>">
</head>
<body>
  <header>
    <h1>GoPark</h1>
    <nav>
      <ul>
        <li><a href="<?= site_url('scroll') ?>">parkir</a></li>
        <li><a href="<?= site_url('contact') ?>">Contact</a></li>
        <li><a href="<?= site_url('about') ?>">About</a></li>
        <li><a href="<?= site_url('service') ?>">Service</a></li>

      </ul>
    </nav>
  </header>

  <section class="checkout-section">
    <div class="container">
      <h2>Check Out</h2>
      <form action="<?= site_url('checkout') ?>" method="post"> <!-- Tambahkan action dan method pada form -->
        <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="nomor_kendaraan">Nomor Kendaraan</label>
          <input type="text" id="nomor_kendaraan" name="nomor_kendaraan" required>
        </div>
        <div class="form-group">
          <label for="metode_pembayaran">Metode Pembayaran</label>
          <select id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="" disabled selected>Pilih Metode Pembayaran</option>
            <option value="kartu kredit">Kartu Kredit</option>
            <option value="transfer bank">Transfer Bank</option>
            <option value="dompet digital">Dompet Digital</option>
          </select>
        </div>
        <button type="submit">Bayar</button>
      </form>
    </div>
  </section>

  <footer>
    <p>© 2023 GoPark. All Rights Reserved.</p>
  </footer>
</body>
</html>
