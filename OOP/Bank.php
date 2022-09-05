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
      <p class="lead text-white text-center">welcome to php object oriented programming</p>
  <?php
    class Bank{
      public $accno;
      public $name;
      public $balance;

      function depsoitAmount($amnt){
        $this->balance = $this->balance + $amnt;

      }

      function deductAmount($amnt){
        if($this->balance <=0){
          echo"No balance in the account plz to up!".PHP_EOL;
          return;
        }
        if($this->balance < $amnt){
          echo"The amount requested amount is greater than the exiting Balance" .PHP_EOL;
          return;
        }
        $this->balance = $this->balance - $amnt;
      }
      //balance check
      function checkBalance(){
        echo"Your account balance: $this->balance".PHP_EOL;
      }
    }

    $bk = new Bank();
    $bk->accno=101;
    $bk->name='Titus Tycoon';
    $bk->balance=1000;
    //check balance & deposit amnt
    $bk->checkBalance(); 
    $bk->depsoitAmount(500);
    //check balance & deduct amnt
    $bk->checkBalance(); 
    $bk->deductAmount(100);
    //check balance & deduct large amnt
    $bk->checkBalance(); 
    $bk->deductAmount(2000);
    //check balance
    $bk->checkBalance();
    
  ?>
      </div>
  <script src="../bootstrap4/js/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
</body>
</html>