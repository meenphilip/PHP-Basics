<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRINGS | PHP</title>
</head>
<body>
  <h1>STRINGS IN PHP</h1><br>
  <?php
  $color='black';
  $shirt='sleeveless';
  $combination=$color." ".$shirt." shirt thank you";
  echo $color."<hr>";
  echo $shirt.'<hr>';
  echo $combination;
  ?> 
  <h2> <u> THE DIFFERENCE BTW DOUBLE AND SINGLE QUOTATION</u></h2>
  <?php
  echo'[in single quotes]= $color <br>';
  echo " [double quotes] $color is my favorite";
  ?> 
  <h1> <strong><u> STRING FUNCTIONS</u></strong></h1>
  <?php
$phrase="student who come late in class ";
$phrase1="sit in last with a Rock";
$combine = $phrase;
$combine.= $phrase1;
echo"<b>Original full string</b>: $combine <br>";
  ?><hr>
 <b> uppercase first letter:</b><?php echo ucfirst($combine);?><br>
 <b> uppercase words:</b><?php echo ucwords($combine);?><br>
  <b>uppercase:</b><?php echo strtolower($combine);?><br>
  <b>uppercase:</b><?php echo strtoupper($combine);?><br>
  <hr>
  REPEAT x3: <?php echo str_repeat ($combine,3);?><hr>
  Make a subString from one point:<?php echo substr ($combine,5,10);?><hr>
  Find position of any specific words:<?php echo strpos ($combine,"come");?><br>
  FIND Character: <?php echo strchr ($combine,"R");?><br>
  REPlace a word: <?php echo str_replace ("student","pupil",$combine);?><br>
  TRIM: <?php echo "A" .trim(" B C D ")."E";?> <br>
  Find specific word and show after:<?php echo strstr ($combine,"come");?><hr>
  LENGHT: <?php echo strlen ($combine);?><br>


</body>
</html>