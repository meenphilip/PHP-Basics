<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Object Oriented Programming |PHP</title>
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
</head>
<body>
      <div class="container">
      <p class="lead text-white text-center">welcome to php pdo</p>
  <?php
    $DSN = "mysql:localhost; dbname=store";
      try{
        $conn = new PDO($DSN, "root","");
        echo"<P class='alert alert-success'> CONNECTION SUCCESFUL</p>"; 
    }
    catch(PDOException $e){
      die("Couldn't connect to database because:".$e->getMessage());
    }

  ?>
      </div>
  <script src="../bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>
</html>