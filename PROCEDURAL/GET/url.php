<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> URL | PHP</title>
</head>
<body>
    <h1>URL IN PHP</h1><br>
    <?php?>
    <?php
    echo"URLENCODING <br>";
    $Web="Google Kenya";
    $Search="Meen Tycoon online courses & Websites";
    $Result="https://".urlencode($Web)."?Search=".urlencode($Search);
    echo $Result."<br>";
    ?><hr>

    <?php
        echo"raw URLENCODING <br>";
    $Web="Google Kenya";
    $Search="Meen Tycoon online courses & Websites";
    $Result="https://".rawurlencode($Web)."?Search=".rawurlencode($Search);
    echo $Result."<br>";
    ?><hr>

        <?php
        echo" combine of raw + URLENCODING <br>";
    $Web="Google Kenya";
    $Search="Meen Tycoon online courses & Websites";
    $Result="https://".urlencode($Web)."?Search=".rawurlencode($Search);
    echo $Result."<br>";
    ?><hr>

</body>
</html>