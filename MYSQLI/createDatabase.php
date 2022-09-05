<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Intro to mysqli</title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" />
</head>
<body>
  <div class="container-fluid">
    <?php
    $link = mysqli_connect('localhost', 'root', '');
    if (mysqli_connect_error()) {
      die("Error: Unable to connect" . mysqli_connect_error());
    }
    echo " connected successfully to the server";
    echo "<p class='lead'> Create a database</p> <br>";
    $sql = "CREATE DATABASE store";
    if (mysqli_query($link, $sql)) {
    echo "<p class='lead text-capitalize '>Database store created successfuly</p> <br>";
    } else {
    echo "<P>ERROR: UNABLE TO CONNECT {$sql} <br>" . mysqli_error($link);
    }
  ?>
  </div>
  <script src="bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>
