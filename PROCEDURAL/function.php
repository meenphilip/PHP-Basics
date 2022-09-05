<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCTION | PHP</title>
</head>
<body>
   <H1>Function in php</H1> 
   <?php
   function welcome(){
       echo"Welcome to PHP course <br>";
   }
   //welcome();

   //echo"Function with parameters<br>";
   function addition($x,$y){
       $results=$x+$y;
       echo"<br> the Sum : {$results}";
   }
   //addition(1,2);


   ?>
</body>
</html>