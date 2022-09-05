<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUMBERS IN PHP</title>
</head>
<body>
    <?php
$FirstNumber= 3;
$SecondNumber=4;
$ThirdNumber=3.14233;
    ?><br>
    
<?php echo $ThirdNumber +9-6;?><br>
<?php echo "ceil($ThirdNumber)<br>";?><br>
<?php echo" floor($ThirdNumber)<br>";?><br>
<?php echo "is {$FirstNumber} : integer ". is_int($FirstNumber);?><br>
<?php echo "is {$ThirdNumber} : float ". is_float($FirstNumber);?><br>
<?php echo "is {$FirstNumber} : integer ". is_numeric($FirstNumber);?><br>
<?php echo "is {$ThirdNumber} : float ". is_float($ThirdNumber);?><br>
Convert to binary(3)-><?php echo decbin(3);?><br>
Convert to Decimal(11)-><?php echo bindec(11);?><br>
square root in php <?php echo sqrt(8);?><br>
Abosolute number <?php echo abs(-456 + 100);?><br>
power of numbers <?php echo pow(8,2);?><br>
Modules(reminder) <?php echo fmod(15,7);?><br>
Random number(a computer assigns the number ) <?php echo rand();?><br>
Random number(a user defines the range) <?php echo rand(499,999);?><br>

</body>
</html>