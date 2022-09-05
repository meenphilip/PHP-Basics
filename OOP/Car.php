<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Intro-Oop |Php</title>
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
</head>

<body>
  <div class="container ">
    <p class="lead text-center text-uppercase">welcome to php object oriented programming</p>
    <?php
    class Car
    {
      public $name;
      public $color;
      function sayHello()
      {
        echo " hello php oop concept!" . PHP_EOL;
      }
    }
    $obj = new Car();
    $obj->name = 'Ferrari';
    $obj->color = 'red';
    $obj->sayHello();
    echo "<div class='alert alert-success'>$obj->name is $obj->color in color.</div>" . PHP_EOL;
    $obj1 = new Car();
    $obj1->name = 'BMW';
    $obj1->color = 'black';
    $obj1->sayHello();
    echo "<div class='alert alert-danger'>$obj1->name is $obj1->color in color.</div>" . PHP_EOL;


    ?>

  </div>
  <script src="../bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>

</html>