<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .profile-img {
      text-align: center;
      margin-bottom: 20px;
    }

    .profile-img img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
    }

    .profile-name {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .profile-info {
      margin-bottom: 20px;
    }

    .profile-info p {
      margin-bottom: 5px;
    }

    .profile-info label {
      font-weight: bold;
    }

    .profile-contact {
      text-align: center;
    }

    .profile-contact a {
      text-decoration: none;
      color: #333;
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="profile-img">
      <img src="<?= base_url('assets/images/admin.jpg') ?>" alt="Admin Profile">
    </div>
    <div class="profile-name">
      Admin
    </div>
    <div class="profile-info">
    <p><label>Username:</label>   Admin@gmail.com</p>
    <p><label>Password:</label>   A*******</p>
      <p><label>Email:</label>   Ahmadderi880@gmail.com</p>
      <p><label>Telepon:</label>   082252828024</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</body>
</html>


<?php include('includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?>
