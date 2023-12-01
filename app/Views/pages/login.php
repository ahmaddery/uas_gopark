<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }    .login-box {
        width: 400px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-logo {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-card-body {
        padding: 20px;
    }

    .input-group {
        margin-bottom: 20px;
    }

    .input-group-append {
        cursor: pointer;
    }

    .fas {
        font-size: 18px;
    }

    .btn-primary {
        width: 100%;
        height: 40px;
        background-color: #007bff;
        color: #fff;
        border: none;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #0069d9;
    }

    .login-box a {
        color: #007bff;
        text-decoration: none;
    }

    .login-box a:hover {
        text-decoration: underline;
    }

    .login-card-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .input-group {
        width: 100%;
        margin-bottom: 20px;
    }

    .btn-primary {
        width: 100%;
        height: 40px;
        background-color: #007bff;
        color: #fff;
        border: none;
    }

    .form-control {
        width: 100%;
        height: 30px;
        font-size: 14px;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    /* Additional CSS for a more stylish appearance */
    .login-box {
        border-radius: 5px;
    }

    .login-logo a {
        font-size: 24px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    .login-card-body {
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f8f8f8;
    }

    .input-group-text {
        background-color: #f8f8f8;
        border: none;
    }
</style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Admin</b>Panel</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login Admin</p>            <?php if (isset($error)) : ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form action="<?= site_url('pages/login') ?>" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
</body>
</html>