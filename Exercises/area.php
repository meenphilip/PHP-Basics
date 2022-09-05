<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pract Area</title>
</head>
<body>
   <?php
   define("PI",3.142);
//    $radius=21;
//    $area=PI * $radius;
//    echo"The Area= {$area}";
function calculateArea($radius){
   $area= PI * $radius;
   return $area; 
}
$number=calculateArea(35);
echo"the area= {$number}";

   ?> 
</body>
</html>