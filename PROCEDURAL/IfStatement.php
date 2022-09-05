<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF STATEMENT | PHP</title>
</head>
<body>
<?php
$Weather=array("cloudy","rainny","calm");
$Weather="rain";
if($Weather=="Sunny"){
    echo"<h1>Pleasant weather forecast</h1> <br>";
}
elseif($Weather=="cloudy"){
    echo"<h2>It's couldy with a chance with of raining MeATballs</h2> <br>";
}
elseif($Weather=="rainny"){
    echo"<h3>thunder Storm is possible outcome yoh</h3> <br>";
}
elseif($Weather=="calm"){
    echo"<h4>Cool breeze is breezing tonight</h4> <br>";
}
else{
    echo"<h5>whatApp with this climate!!!</h5>";
}
?>  
<?php
$Bought_product=false;
if($Bought_product){
echo"<h1>Thank you</h1>";
}else{
   echo" <p> Your package is being proceesd</p>";
}
?><hr>
<?php
$a=4;
$b=3;
$c="Results can be out";
if($b<5 && $a>0){
    $c=$a/$b;
}
echo $c;


?>
 
</body>
</html>