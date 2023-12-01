<!DOCTYPE html>
<html>
<head>
    <title>Gopark - Tambah Parkir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <?php include('includes/navbar.php'); ?>

    <div class="container mt-5">
        <h2>Tambah Parkir</h2>

        <form method="post" action="<?php echo base_url('/pages/store'); ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pemilik_parkir">Pemilik Parkir</label>
                <input type="text" class="form-control" id="pemilik_parkir" name="pemilik_parkir" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto" name="foto">
                    <label class="custom-file-label" for="foto"><i class="fas fa-upload"></i> Choose File</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </form>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <?php include('includes/footer.php'); ?>
    <?php include('includes/scripts.php'); ?>
</body>
</html>
