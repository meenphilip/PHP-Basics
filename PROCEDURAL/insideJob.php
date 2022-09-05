<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY | | PHP</title>
</head>
<body>
    
<?php
$Numbers=array(8,23,45,60,168,500,999);
print_r($Numbers);
?><hr>
<?php
echo current($Numbers)."<br>";
next ($Numbers);
echo current ($Numbers)."<br>";
next ($Numbers);
echo current ($Numbers)."<br>";
next ($Numbers);
next ($Numbers);
echo current ($Numbers)."<br>";
next ($Numbers);
echo current ($Numbers)."<br>";
reset($Numbers);
echo current ($Numbers)."<br>";
end($Numbers);
echo current ($Numbers)."<br>";

?>


</body>
</html>