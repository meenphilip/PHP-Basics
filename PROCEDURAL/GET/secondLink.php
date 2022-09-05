<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LINKS | PHP</title>
</head>
<body>
<pre>
    <?php 
    print_r($_GET);
    ?>
    </pre><br>
    
            <?php
            $name = $_GET['name'] ;
            echo $name;
            ?><br>
    <?php
    $position = $_GET['position'] ;
    echo $position;
    ?>
</body>
</html>