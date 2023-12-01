<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .dashboard {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      flex-wrap: wrap;
    }

    .info-box {
      background-color: #f0f0f0;
      padding: 30px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-sizing: border-box;
      flex-basis: calc(50% - 20px);
    }

    .info-box p {
      font-size: 18px;
      margin: 0;
    }

    .info-box button {
      background-color: #4e73df;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      display: flex;
      align-items: center;
    }

    .info-box button i {
      margin-right: 5px;
    }

    .info-box button:hover {
      background-color: #375ac4;
    }

    .time-wrapper {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
      width: 100%;
    }

    .time {
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
    }

    table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table th,
table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

table th {
  background-color: #f0f0f0;
  font-weight: bold;
}

table tbody tr:last-child td {
  border-bottom: none;
}

.card {
  background-color: #f0f0f0;
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 5px;
  box-sizing: border-box;
}
.card {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card h2 {
  margin-top: 0;
  margin-bottom: 10px;
}


.card table {
  width: 100%;
}

.card th,
.card td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.card th {
  background-color: #f8f8f8;
  font-weight: bold;
}

.card tbody tr:last-child td {
  border-bottom: none;
}
.fas {
    display: inline-block;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 14px;
    line-height: 1;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  </style>
</head>

<body>
  <!-- Include the header and navbar -->
  <?php include('includes/header.php'); ?>
  <?php include('includes/navbar.php'); ?>

  <!-- Begin Page Content -->
  <div class="container">
    <!-- Page Heading -->
    <div class="time-wrapper">
      <h4>Waktu Sistem: <span id="waktuWIB" class="time"></span></h4>
      <h4>Tanggal: <span id="tanggal"></span></h4>
    </div>

    <div class="dashboard">
      <div class="info-box">
        <?php
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'gopark');

        // Check connection
        if (mysqli_connect_errno()) {
          echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
          exit();
        }

        // Query to get the count of users
        $queryUsers = 'SELECT COUNT(*) AS total_users FROM users';

        // Execute the query to get total users
        $resultUsers = mysqli_query($conn, $queryUsers);

        // Check if query execution was successful
        if ($resultUsers) {
          // Fetch the results
          $rowUsers = mysqli_fetch_assoc($resultUsers);
          $totalUsers = $rowUsers['total_users'];

          // Display the total users count and button
          echo '<p>Total Users: ' . $totalUsers . '</p>';
          echo '<button onclick="location.href=\''.site_url('pages/user').'\'"><i class="fas fa-info-circle"></i> Detail User--></button>';

        } else {
          echo 'Error executing the query: ' . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
      </div>

      <div class="info-box">
        <?php
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'gopark');

        // Check connection
        if (mysqli_connect_errno()) {
          echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
          exit();
        }

        // Query to get the count of contacts
        $queryContacts = 'SELECT COUNT(*) AS total_contacts FROM contact_us';

        // Execute the query to get total contacts
        $resultContacts = mysqli_query($conn, $queryContacts);

        // Check if query execution was successful
        if ($resultContacts) {
          // Fetch the results
          $rowContacts = mysqli_fetch_assoc($resultContacts);
          $totalContacts = $rowContacts['total_contacts'];

          // Display the total contacts count and button
          echo '<p>Total Contacts: ' . $totalContacts . '</p>';
          echo '<button onclick="location.href=\''.site_url('pages/ContactUs').'\'"><i class="fas fa-users"></i> Detail Contact--></button>';

        } else {
          echo 'Error executing the query: ' . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
      </div>

      <div class="info-box">
        <?php
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'gopark');

        // Check connection
        if (mysqli_connect_errno()) {
          echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
          exit();
        }

        // Query to get the count of parkir
        $queryParkir = 'SELECT COUNT(*) AS total_parkir FROM parkir';

        // Execute the query to get total parkir
        $resultParkir = mysqli_query($conn, $queryParkir);

        // Check if query execution was successful
        if ($resultParkir) {
          // Fetch the results
          $rowParkir = mysqli_fetch_assoc($resultParkir);
          $totalParkir = $rowParkir['total_parkir'];

          // Display the total parkir count and button
          echo '<p>Total Parkir: ' . $totalParkir . '</p>';
          echo '<button onclick="location.href=\''.site_url('pages/index').'\'"><i class="fas fa-info-circle"></i> Detail Parkir--></button>';

        } else {
          echo 'Error executing the query: ' . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
      </div>

      <div class="info-box">
        <?php
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'gopark');

        // Check connection
        if (mysqli_connect_errno()) {
          echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
          exit();
        }

        // Query to get the count of checkout
        $queryCheckout = 'SELECT COUNT(*) AS total_checkout FROM check_out';

        // Execute the query to get total checkout
        $resultCheckout = mysqli_query($conn, $queryCheckout);

        // Check if query execution was successful
        if ($resultCheckout) {
          // Fetch the results
          $rowCheckout = mysqli_fetch_assoc($resultCheckout);
          $totalCheckout = $rowCheckout['total_checkout'];

          // Display the total checkout count and button
          echo '<p>Total Checkout: ' . $totalCheckout . '</p>';
          echo '<button onclick="location.href=\''.site_url('pages/checkout').'\'"><i class="fas fa-info-circle"></i> Detail Checkout--></button>';

        } else {
          echo 'Error executing the query: ' . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
      </div>
    </div>

    <div class="card">
  <h2>History Data Contact Dan Checkout:</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Pesan</th>
      </tr>
    </thead>
    <tbody>
      <!-- Isi data kontak terakhir di sini -->
      <?php
      // Connect to the database
      $conn = mysqli_connect('localhost', 'root', '', 'gopark');

      // Check connection
      if (mysqli_connect_errno()) {
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
        exit();
      }

      // Query to get the latest contact_us data
      $queryLatestContact = 'SELECT * FROM contact_us ORDER BY id DESC LIMIT 1';

      // Execute the query to get the latest contact_us data
      $resultLatestContact = mysqli_query($conn, $queryLatestContact);

      // Check if query execution was successful
      if ($resultLatestContact) {
        // Loop through the rows to display the data
        while ($rowLatestContact = mysqli_fetch_assoc($resultLatestContact)) {
          echo '<tr>';
          echo '<td>' . $rowLatestContact['id'] . '</td>';
          echo '<td>' . $rowLatestContact['nama'] . '</td>';
          echo '<td>' . $rowLatestContact['email'] . '</td>';
          echo '<td>' . $rowLatestContact['subject'] . '</td>';
          echo '<td>' . $rowLatestContact['message'] . '</td>';
          echo '</tr>';
        }
      } else {
        echo 'Error executing the query: ' . mysqli_error($conn);
      }

      // Close the database connection
      mysqli_close($conn);
      ?>

   



<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'gopark');

// Check connection
if (mysqli_connect_errno()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
  exit();
}

// Query to get the last 2 rows from check_out table
$queryLastTwo = "SELECT * FROM check_out ORDER BY id DESC LIMIT 2";

// Execute the query to get the last 2 rows
$resultLastTwo = mysqli_query($conn, $queryLastTwo);

// Check if query execution was successful
if ($resultLastTwo) {
  // Check if there are any rows returned
  if (mysqli_num_rows($resultLastTwo) > 0) {
    // Display the data in a table
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nama Lengkap</th>';
    echo '<th>Email</th>';
    echo '<th>Nomor Kendaraan</th>';
    echo '<th>Metode Pembayaran</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Loop through the rows to display the data
    while ($row = mysqli_fetch_assoc($resultLastTwo)) {
      echo '<tr>';
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['nama_lengkap'] . '</td>';
      echo '<td>' . $row['email'] . '</td>';
      echo '<td>' . $row['nomor_kendaraan'] . '</td>';
      echo '<td>' . $row['metode_pembayaran'] . '</td>';

      echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
  } else {
    echo 'No data available.';
  }
} else {
  echo 'Error executing the query: ' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

<script>
  function viewDetail(checkoutId) {
    // You can implement your logic here to handle the button click
    // For example, you can redirect the user to a detail page or display a modal with the checkout details
    alert('Viewing detail for Checkout ID: ' + checkoutId);
  }
</script>

    </tbody>
  </table>
</div>


  
      </tbody>
    </table>
  </div>

  <!-- Include the footer and scripts -->
  <?php include('includes/footer.php'); ?>
  <?php include('includes/scripts.php'); ?>

  <!-- Include the JavaScript code -->
  <script>
    // Function to update the time and date every second
    function updateWaktuWIB() {
      var currentTime = new Date();
      var hours = currentTime.getHours();
      var minutes = currentTime.getMinutes();
      var seconds = currentTime.getSeconds();
      var tanggal = currentTime.getDate();
      var bulan = currentTime.getMonth() + 1; // Ditambahkan 1 karena bulan dimulai dari 0
      var tahun = currentTime.getFullYear();

      // Add leading zero to minutes, seconds, tanggal, and bulan if less than 10
      minutes = minutes.toString().padStart(2, '0');
      seconds = seconds.toString().padStart(2, '0');
      tanggal = tanggal.toString().padStart(2, '0');
      bulan = bulan.toString().padStart(2, '0');

      // Format the time and date in WIB timezone
      var waktuWIB = hours + ':' + minutes + ':' + seconds;
      var tanggalWIB = tanggal + '-' + bulan + '-' + tahun;

      // Update the time and date in the HTML elements
      document.getElementById('waktuWIB').textContent = waktuWIB;
      document.getElementById('tanggal').textContent = tanggalWIB;
    }

    // Update the time and date immediately
    updateWaktuWIB();

    // Update the time and date every second
    setInterval(updateWaktuWIB, 1000);
  </script>
</body>

</html>
