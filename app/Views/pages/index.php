<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Daftar Parkir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .section-heading {
            margin-bottom: 40px;
            text-align: center;
        }

        .table-responsive {
            margin-top: 30px;
        }

        .thumbnail {
            max-width: 100px;
            max-height: 100px;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
        }

        .edit-btn,
        .delete-btn,
        .add-btn {
            display: inline-block;
            padding: 5px 10px;
            margin: 5px;
            color: #fff;
            border-radius: 3px;
            text-decoration: none;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .edit-btn {
            background-color: #007bff;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .add-btn {
            background-color: #28a745;
        }

        .add-btn i {
            margin-right: 5px;
        }

        .edit-btn:hover,
        .delete-btn:hover,
        .add-btn:hover {
            opacity: 0.8;
        }

        @media (max-width: 576px) {
            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <section id="parkir" class="section">
        <div class="container">
            <div class="section-heading">
                <h2>Daftar Parkir</h2>
            </div>

            <div class="text-left"> <!-- Tombol "Tambah Parkir" ditempatkan di atas tabel -->
                <a href="<?php echo base_url('/pages/create'); ?>" class="add-btn"><i class="fas fa-plus"></i>Tambah Parkir</a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pemilik Parkir</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($parkir as $row) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['pemilik_parkir']; ?></td>
                                <td><?php echo $row['deskripsi']; ?></td>
                                <td>
                                    <?php if (!empty($row['foto'])) { ?>
                                        <img src="<?php echo base_url('upload/' . $row['foto']); ?>" class="thumbnail">
                                    <?php } ?>
                                </td>
                                <td class="action-buttons">
                                    <a href="<?php echo base_url('/pages/edit/'.$row['id']); ?>" class="edit-btn"><i class="fas fa-edit"></i>Edit</a>
                                    <a href="#" class="delete-btn" onclick="confirmDelete(<?php echo $row['id']; ?>)"><i class="fas fa-trash-alt"></i>Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function confirmDelete(id) {
            swal({
                title: "Apakah Anda yakin?",
                text: "Data parkir akan dihapus!",
                icon: "warning",
                buttons: ["Batal", "Hapus"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    // Perform delete action here
                    window.location.href = "<?php echo base_url('/pages/delete/'); ?>" + id;
                } else {
                    swal("Data parkir tidak jadi dihapus.");
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
