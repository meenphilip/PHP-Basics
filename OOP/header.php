<?php
session_start();
$Name = $_SESSION['Name'];
$UserName = $_SESSION['Username'];
$Email = $_SESSION['Email'];
$Password = $_SESSION['Password'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session |PHP</title>
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h5>Thank you <?php echo $UserName; ?>, You have subscribed with the email <?php echo $Email; ?> </h5>
  </div>
  <script src="../bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>