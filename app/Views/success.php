<!DOCTYPE html>
<html>
<head>
    <title>Tampilan Bukti Pembayaran</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo img {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 30px;
        }

        .info h3 {
            margin-bottom: 10px;
            font-weight: bold;
            text-align: center;
        }

        .info p,
        .info h4 {
            margin-bottom: 5px;
            text-align: center;
        }

        .row {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        .row p {
            margin-bottom: 5px;
            font-weight: bold;
            text-align: center;
        }

        .note {
            margin-bottom: 20px;
        }

        .note p {
            margin-bottom: 5px;
            text-align: center;
        }

        .button-container {
            text-align: center;
        }

        .btn {
            display: inline-block;
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .fas {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo">
        </div>
        <div class="info">
            <h3>BUKTI PEMBAYARAN</h3>
            <?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'gopark';
            $koneksi = mysqli_connect($host, $username, $password, $database);
            if (!$koneksi) {
                die('Koneksi database gagal: ' . mysqli_connect_error());
            }
    
            $query = "SELECT * FROM check_out ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($koneksi, $query);
    
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $data = mysqli_fetch_assoc($result);
                    echo '<p><strong>ID:</strong> </p>';
                    echo '<h4>' . $data['id'] . '</h4>';
                    echo '<p><strong>Nama Lengkap:</strong> </p>';
                    echo '<h4>' . $data['nama_lengkap'] . '</h4>';
                    echo '<p><strong>Email:</strong> </p>';
                    echo '<h4>' . $data['email'] . '</h4>';
                } else {
                    echo '<p>Data tidak ditemukan.</p>';
                }
            } else {
                echo '<p>Error: ' . mysqli_error($koneksi) . '</p>';
            }
    
            mysqli_close($koneksi);
            ?>
        </div>
    
        <div class="row">
            <div class="col-md-6">
                <?php
                if ($result && mysqli_num_rows($result) > 0) {
                    echo '<p><strong>Nomor Kendaraan:</strong></p>';
                    echo '<h4>' . $data['nomor_kendaraan'] . '</h4>';
                    echo '<p><strong>Metode Pembayaran:</strong></p>';
                    echo '<h4>' . $data['metode_pembayaran'] . '</h4>';
                }
                ?>
            </div>
        </div>
    
        <div class="note">
            <p><strong>Catatan:</strong> Harap simpan bukti pembayaran sebagai barang bukti.</p>
        </div>
    
        <div class="button-container">
            <button onclick="printReceipt()" class="btn btn-primary"><i class="fas fa-print"></i> Cetak</button>
            <button onclick="goToHome()" class="btn btn-secondary"><i class="fas fa-home"></i> Home</button>
        </div>
    </div>
    
    <script>
        function printReceipt() {
            window.print();
        }
    
        function goToHome() {
            window.location.href = "<?= site_url('scroll') ?>"; // Ganti dengan URL halaman home yang sesuai
        }
    </script>
</body>
</html>
