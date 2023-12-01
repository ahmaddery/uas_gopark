<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Checkout</title>

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.10/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .table {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .alert {
            margin-bottom: 20px;
        }

        .delete-button {
            padding: 5px 10px;
        }


    </style>
</head>
<body>
    <h1>Data Checkout</h1>

    <div class="container">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Nomor Kendaraan</th>
                    <th>Metode Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($checkoutItems as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['nama_lengkap'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td><?= $item['nomor_kendaraan'] ?></td>
                        <td><?= $item['metode_pembayaran'] ?></td>
                        <td>
                            <button class="delete-button btn btn-danger" onclick="showDeleteAlert(<?= $item['id'] ?>)">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.10/dist/sweetalert2.min.js"></script>

    <script>
        function showDeleteAlert(id) {
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to delete endpoint
                    window.location.href = '/checkout/delete/' + id;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    // Show notification if delete is canceled
                    Swal.fire('Yah:( Data tidak dihapus', '', 'info');
                }
            });
        }
    </script>
</body>
</html>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>