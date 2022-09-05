<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact-form</title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <style>
    .contactForm{
      border: 1px solid purple;
      margin-top: 50px;
      border-radius: 15px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-sm-offset-1 col-sm-10 contactForm">
    <h1 class="h1 text-center text-primary">Contact us:</h1>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //errorMeaasge
    $missingName = ' <p> <strong> Please entre your name ! </strong></p>';
    $missingEmail = ' <p> <strong> Please entre your email address ! </strong></p>';
    $invalidEmail = ' <p> <strong> Please entre valid  email address ! </strong></p>';
    $missingMessage = ' <p> <strong> Please type in your message ! </strong></p>';
      //if the user has submitted the form
      if(isset($_POST['submit'])){
       //check for error
      if(!$_POST['name']){
        $errors .= $missingName;
      }
      else{
        $name = filter_var($name, FILTER_SANITIZE_STRING);
      }
      if(!$email){
        $errors .=$missingEmail;
      }
      else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $errors .=$invalidEmail;
        }
      }
      if(!$message){
        $errors .=$missingMessage;
      }
      else{
        $message = filter_var($message,FILTER_SANITIZE_STRING);
      }
       // if there error
      if($errors){
        $resultMessage = "<div class='alert alert-danger'> $errors</div>";
      }
        // print error message
        // no errors
        //send email
        // if success
        // if fail
        //print error message
    //print result message
    echo $resultMessage;
    }
    ?>
    <!-- form here -->
    <form action="contact-form.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name" value="<?php echo $_POST['name'];?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $_POST['email'];?>">
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Type your message here"><?php echo $_POST['message'];?></textarea>
      </div>
      <input type="submit" class="btn btn-lg btn-success mb-1" name="submit" value="Send Message">
    </form>
    </div>
  </div>
  </div>
  <script src="bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>
</html>