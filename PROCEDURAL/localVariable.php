<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCAL VARIABLES</title>
</head>
<body>
    <h1>local variable | php</h1>
    <?php
    $myNumber = 45678;
    function sum(){
        $a=23;
        $b=45;
        $c=$a+$b;
        echo $a."<br>";
        echo $b."<br>";
        echo"The sum : {$c}<br>";
    }
    sum();
    ?>
</body>
</html>