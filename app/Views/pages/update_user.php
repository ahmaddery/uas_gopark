<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Pengguna</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .form-group .button-container {
            display: flex;
            justify-content: flex-start;
        }

        .form-group .button-container button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .form-group .button-container button:hover {
            background-color: #0056b3;
        }

        .form-group .button-container button i {
            margin-right: 5px;
        }

        .form-group .button-container button::placeholder {
            color: #fff;
            opacity: 0.7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Pengguna</h1>
        <form action="<?= base_url('user/processUpdate/' . $user['id']); ?>" method="post">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= $user['nama_lengkap']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $user['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group button-container">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-user-edit"></i> Update Pengguna
                </button>
            </div>
        </form>
    </div>
</body>
</html>

<?php include('includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?>
