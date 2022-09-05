<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER-DEFINED-FUNCTIONS | PHP</title>
</head>
<body>
    <H1>User Defined Functions</H1>
    <?php
    function welcome(){
        echo"<h6>greeting from Meen</h6>";
    }
    welcome();
    ?><hr>
    <?php 
    function sum(){
        $a=6;
        $b=7;
        $c=$a+$b;
        echo"the sum of {$a} and {$b} = {$c}<br>";
    }
    sum();

    echo"<hr>";
    echo"Function with parameters<br>";
    function Addition($x,$y){
        $results = $x+$y;
        echo"The addition is {$results}<br>";
    }
    Addition(1,3);
    Addition(120,103);

    ?>
    <?php
    echo"Function with a return keyWord<br>";
    function add($p,$q){
        $f = $p+$q;
        return($f);
    }
    $total=add(48,50); 
    $total1=add($total,50);
    echo $total."<br>";
    echo $total1;
    ?>
</body>
</html>