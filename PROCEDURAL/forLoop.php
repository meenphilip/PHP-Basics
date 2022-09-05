<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR-LOOP | PHP</title>
</head>
<body>
    <h1>FOR LOOP IN PHP</h1>
    <?php
    for($i=1; $i<=10; $i++){
        echo"{$i} is counting down <br>";
    }
    
    ?>
    <h1>the table of 2</h1><br>
    <?php
    $number=2;
    for($i=1; $i<=10;$i++){
        $results = $number * $i;
        echo"{$number} * {$i} = {$results} <br>";
    }
    ?>
    <h1>Multiplication table from 1 to 10</h1>
    <?php
   /* $num=1;
    $num1=10;
    for($num=1; $num<=10; $num++){
        //$results1=$num * $num1;
        echo" <br>";
        for($num1=10; $num<=10; $num1++){
         echo"{$num} * {$num1}= {$results1} <br>";
        }

    }*/
    ?>
</body>
</html>
