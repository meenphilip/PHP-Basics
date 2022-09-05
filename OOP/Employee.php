<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee |PHP OOP</title>
  <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
</head>
<body>
      <div class="container">
      <p class="lead text-white text-center">welcome to php object oriented programming</p>
  <?php
    class Employee{
      public $id;
      public $name;
      public $workingHursPerDay=8;
      public $hourlyRate =15;
      public $totalLeaveTaken;
      public $workingDays;

      //function in php
      function getSalaryAmount($totalDays) : int{
        $this->workingDays = $totalDays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHursPerDay * $this->hourlyRate;
        return $salary;
      }
    }
    // create an object
    $emp1 = new Employee();
    $emp1->id=101;
    $emp1->name = 'John Smith';
    $emp1->totalLeaveTaken  = 4;
    $salary = $emp1->getSalaryAmount(20);
    //display info
    echo" $emp1->name has worked for $emp1->workingDays and taken $emp1->totalLeaveTaken leaves.".PHP_EOL;
    echo"$emp1->name salary is $salary".PHP_EOL;
  ?>
      </div>
  <script src="../bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>
</html>