<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY FUNCTIONS | PHP</title>
</head>
<body>
<h1>ARRAY FUNCTIONS</h1><hr>
<?php
  $color=array("Red","Blue","Green","Alpha");
  array_pop($color);
  array_pop($color);
  array_push($color,"pink","white","black");
  print_r($color);
  ?> <br>
  <?php
  $Numbers=array(1,5,7,8,9,0,5,3,455,7,890);
  ?><br>
  MAXimum <?php echo max($Numbers); ?><br>
  MINinum <?php echo min($Numbers); ?><br>
  Count <?php echo count($Numbers); ?><br> 
  YES/NO <?php echo in_array(890,$Numbers); ?><br>
  SORT ARRAY(ascending order):<br> <?php echo sort($Numbers); ?><br>
  <?php echo print_r($Numbers); ?><br>
  RESORT USING RSORT(descending order):<br> <?php echo rsort($Numbers); ?><br>
  <?php echo print_r($Numbers); ?><br>

<p><h2>Implode() function is used to return a string from the element of array</h2></p><br>
<?php $Quote=array("You'll"," Never ","Walk"," Alone");?><br>
IMPLODE <?php echo implode(" ",$Quote);?><br>
<p><h2>EXplode() function is used to break a string into array</h2></p><br>
EXPLODE <?php
$Quote="You'll Never Walk Alone";
print_r(explode(" ",$Quote));?><br>

</body>
</html>