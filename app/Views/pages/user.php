<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }

        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        p {
            text-align: center;
            color: #777;
            margin-top: 30px;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
        }

        .action-buttons a {
            display: inline-block;
            padding: 8px 12px;
            margin-right: 5px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .action-buttons a.btn-danger {
            background-color: #dc3545;
        }

        .action-buttons a:hover {
            background-color: #0056b3;
        }

        .action-buttons a i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <?php if (!empty($users)): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id']; ?></td>
                            <td><?= $user['nama_lengkap']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td class="action-buttons">
                                <a href="<?= base_url('user/update/' . $user['id']); ?>" class="btn btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?= base_url('user/delete/' . $user['id']); ?>" onclick="confirmDelete(event)" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Tidak ada pengguna yang tersedia.</p>
        <?php endif; ?>
    </div>

    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        function confirmDelete(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin menghapus pengguna ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan penghapusan dengan mengarahkan ke halaman delete
                    window.location.href = event.target.href;
                } else {
                    Swal.fire('Dibatalkan', 'yeay :) Data pengguna tidak dihapus.', 'info');
                }
            });
        }
    </script>
</body>
</html>

<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>
