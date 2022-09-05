  <?php
  require_once("Db.php");
  ?>
  <?php
  $msg = "";
  $msgClass = "";
  if (isset($_POST["Submit"])) {
    $Username = htmlspecialchars($_POST["Username"]);
    $Name = htmlspecialchars($_POST["Name"]);
    $Email = htmlspecialchars($_POST["Email"]);
    $Password = htmlspecialchars($_POST["Password"]);
    $ConfirmPassword = htmlspecialchars($_POST["ConfirmPassword"]);
    $Message = htmlspecialchars($_POST["Message"]);

    if (empty($_POST["Username"]) || empty($Name) || empty($Email) || empty($Password)) {
      $msg = "Please All Fields Are Compulsory";
      $msgClass = "alert-danger";
    } elseif (filter_var($Email, FILTER_VALIDATE_EMAIL) === false) {
      $msg = "Please Enter a valid Email";
      $msgClass = "alert-danger";
    } elseif ($Password != $ConfirmPassword) {
      $msg = "Password and Confirm Password should match";
      $msgClass = "alert-danger";
    } elseif (strlen($Password) < 4) {
      $msg = "Password should be greater than 4 characters";
      $msgClass = "alert-danger";
    } else {
      global $conn;
      $sql = "INSERT INTO contact(username,name,email,password,cpassword,message) 
      VALUE(:UserNamE,:NamE,:EmaiL,:PassworD,:CpassworD,:MessagE)";
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(':UserNamE', $Username);
      $stmt->bindValue(':NamE', $Name);
      $stmt->bindValue(':EmaiL', $Email);
      $stmt->bindValue(':PassworD', $Password);
      $stmt->bindValue(':CpassworD', $ConfirmPassword);
      $stmt->bindValue(':MessagE', $Message);
      $Execute = $stmt->execute();
      if ($Execute) {
        $msg = "Contact with Id " . $conn->lastInsertId() . " Added Successfully";
        $msgClass = "alert-success";
      } else {
        $msg = "Something went wrong. Try Again !";
        $msgClass = "alert-danger";
      }
    }
  }
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Form</title>
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
  </head>

  <body>
    <div class="container offset-sm-3 col-sm-6">
      <?php if ($msg != ""); ?>
      <div class="alert m-1 <?php echo $msgClass; ?>">
        <?php echo $msg; ?>
      </div>
      <?php T_ENDIF; ?>
      <div class="card bg-dark border-danger text-white py-2 m-2">
        <div class="card-header text-uppercase text-center text-warning">
          Contanct Us
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Please Enter Your Details</h5>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate class="was-validated">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="Username" placeholder="username" value="<?php echo isset($_POST['Username']) ? $Username : ''; ?>" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="Name" placeholder="name" value="<?php echo isset($_POST['Name']) ? $Name : ''; ?>" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="Email" id="email" placeholder="email" value="<?php echo isset($_POST['Email']) ? $Email : ''; ?>" required>
              </div>
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="Password" id="password" placeholder="password" value="" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="Confirmpassword">Confirm Password</label>
                <input type="password" class="form-control" name="ConfirmPassword" id="Confirmpassword" placeholder="Confirm Password" required>
              </div>
            </div>
            <div class="form-group">
              <label for="textarea">Message:</label>
              <textarea id="textarea" class="form-control" name="Message" rows="5" cols="50" placeholder="Write your message here..." required>
                <?php echo isset($_POST['Message']) ? $Message : ''; ?>
              </textarea>
            </div>
            <input type="submit" name="Submit" class="btn btn-info btn-block" value="Login">
          </form>
        </div>
      </div>
    </div>
    <script src="../bootstrap4/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>