<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Intro to mysqli</title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" />
</head>
<body>
  <div class="container">
    <p class="font-weight-bold">intro to mysqli</p>
    <?php
    $link = @mysqli_connect('localhost', 'root', '', 'shoppinglist');
    //var_dump($link);
    //check connection
    if(mysqli_connect_error()){
    die("Error: Unable to connect".mysqli_connect_error());

    }
    echo" connected to database successfully";
  ?> 

    <?php
   // connection
    $link1 = new mysqli('localhost', 'root', '', 'shoppinglist');
    if($link1->connect_errno > 0){
      die("UNABLE TO CONNECT DATABASE:".$link1->connect_error);
    }
    echo"<p class='lead'> Successful connected to database using mysqli OOP</p>";
  ?>
  </div>
  <script src="bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>

</html>
