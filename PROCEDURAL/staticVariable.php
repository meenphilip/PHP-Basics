<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATIC-VARIABLE</title>
</head>
<body>
    <h2>STATIC VARIABLE | PHP</h2>
    <?php
    function normalVariable(){
        $value=1;
        echo"normal variable: {$value} <br>";
        $value++;
    }
    normalVariable();
    normalVariable();
    normalVariable();
    ?><hr>
    <?php
        function staticVariable(){
            static $value=1;
            echo"Static variable: {$value} <br>";
             $value++;
        }
        staticVariable();
        staticVariable();
        staticVariable();
    ?>
</body>
</html>