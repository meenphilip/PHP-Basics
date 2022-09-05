<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LINKS | PHP</title>
</head>
<body>
    
    <?php $name="Titus moran";?>
    <?php $position="support co-ordinator & manager"; ?>
    <a href="secondLink.php?name=<?php echo $name;?>"> Click</a><br>
    <a href="secondLink.php?name=<?php echo $name;?> &<?php echo $position;?>"> Click me</a><br>
    <a href="secondLink.php?name=<?php echo $name;?> &position=<?php echo urlencode($position);?>"> Click me too</a><br>
    <?php?>
</body>
</html>