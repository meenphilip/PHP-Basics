<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWITCH-STATEMENT | PHP</title>
</head>
<body>
<h1>Switch Statement in php</h1>
    <?php
    $weather=array("sunny","rainny","cloudy","calm");
    switch($weather=[3]){
        case [0]:
           echo"The weather is pleasant";
        break;
        case [1]:
           echo"The weather is pleasent for farmers i guess";
        break;
        case [2]:
            echo "The weather is cold and chilly";
        break;
        case [3]:
            echo"The weather brings with it cool breeze meant for relaxing";
        break;
        default:
        echo"It's must be one above!";
    }
    ?>
<?php


?>
</body>
</html>