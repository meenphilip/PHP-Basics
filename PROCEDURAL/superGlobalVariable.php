<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variables</title>
</head>
<body>
    <h1>Super Global Variables</h1>
    <p>They include</p><br>
    <ol type="1">
    <li>$GLOBALS</li>
    <li>$_SERVER</li>
    <li>$_REQUEST</li>
    <li>$_FILES</li>
    <li>$_SESSION</li>
    <li>$_ENV</li>
    <ul type="bullets">
    <p>most important & used in php</p>
    <li>$_GET</li>
    <li>$_POST</li>
    <li>$_COOKIE</li>
    </ul>
    </ol>
    <?php
    $x=34;
    $y=66;
    function test(){
        $GLOBALS['z']= $GLOBALS['x'] + $GLOBALS['y'];
        
    }
    test();
    echo $z."<hr>";
    //print_r($GLOBALS);
    ?>
    <pre>
    <?php echo print_r($GLOBALS);?><br>
   </pre>
</body>
</html>