<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student |PHP</title>
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
</head>
<body>
      <div class="container">
      <p class="lead text-white text-center">welcome to php object oriented programming</p>
  <?php
    class Student{
      public $name;
      public $class;
      
      //functions getter and setter for each property
      function getName() : string{
        return $this->name; 
      }
      //set name method
      function setName($name){
        $this->name=$name;
      }
      //for class property
      function getClass() : int{
        return $this->class; 
      }
      //set name method
      function setClass($class){
        $this->class=$class;
      }

      //function to print details
      function printDetails(){
        echo"My name is $this->name and i am in class $this->class";
      }
    }

    //creating obj
    $stud = new Student();
    $stud->setName("Menn tycoon");
    $stud->getName();

    $stud->setClass(1);
    $stud->getClass();
    $stud->printDetails();
  ?>
      </div>
  <script src="../bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>
</html>