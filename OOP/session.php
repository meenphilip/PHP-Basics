<?php
if (isset($_POST['Submit'])) {
  //start session
  session_start();
  $_SESSION['Name'] = htmlentities($_POST['Name']);
  $_SESSION['Username'] = htmlentities($_POST['Username']);
  $_SESSION['Email'] = htmlentities($_POST['Email']);
  $_SESSION['Password'] = htmlentities($_POST['Password']);
  header("location: header.php");
}
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
  <div class="container bg-secondary mt-5 py-4 text-white">
    <form method="post" action="session.php">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="Name" id="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="Username" id="username" placeholder="Username">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="username">Email</label>
            <input class="form-control" type="email" name="Email" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="Password" id="password" placeholder="Password">
          </div>
        </div>
      </div>
      <button type="submit" name="Submit" class="btn btn-primary">Login</button>
    </form>
  </div>
  <script src="../bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>

</html>