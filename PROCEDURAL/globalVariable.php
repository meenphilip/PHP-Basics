<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBAL VARIABLE</title>
</head>
<body>
   <h1>GLOBAL VARIABLE IN PHP</h1> 
       <?php
    $myNumber = 45678;//local varaiable
    function sum(){
        global $myNumber;
        $a=23;
        $b=45;
        $c=$a+$b;
        echo $a."<br>";
        echo $b."<br>";
        echo"The sum : {$c}<br>";
        echo"New Global sum : ".($myNumber+$c)."<br>";
    }
    sum();
    ?>
</body>
</html>