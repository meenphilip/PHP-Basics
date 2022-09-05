<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS | PHP</title>
</head>
<body>
    <?php
    $name=array('scola','tito', 'moh');
    echo $name[2];
    ?><br>
    <?php 
    $food=array('apple','pizza','chicken masala',12,2,array("Asian","German","French"),"pasta");?><br>
    <?php echo $food[2];?><br>
    <?php echo $food[5][1];?><br>
    <?php echo $food[26]="Mango";?><br>
    <?php echo $food[2688]="pear";?><br>
    array structure
    <pre>
    <?php echo print_r($food);?><br>
    </pre>
    <h1>ASSOCIATIVE ARRAYS</h1>
    <?php $color=array("A"=>"PIZZA","B"=>"45");?>
    <?php echo $color["A"];?>
    <?php $Food=array("ASIAN"=>"PASTA","ITALIAN"=>"BIRYANI","FRENCH"=>"FRENCH FRIES");?><BR>
    <?php echo $Food["ASIAN"]. "is for". $Food["ITALIAN"];?>
    array structure
    <pre>
    <?php echo print_r($Food);?><br>
    </pre>
</body>
</html> 
