<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For-Each-Loop | php</title>
</head>
<body>
    <h1>For each loop in php</h1>
<?php
$number=array(45,67,789,896,56,34,995,168);
foreach($number as $num){
    echo"Numbers: {$num} <br>";
}
?>
</body><hr>
<?php
$food=array("item_number"=>1050,
"name"=>"Pizza",
"region"=>"Italy",
"Side_food"=>"pasta",
"Drink"=>"cook",
"package_price"=>12000
);
foreach($food as $key=>$value){
    $Data = ucwords(str_replace("_"," ",$key));
    if($key=="package_price") {
        if(is_numeric($value)){
            
        }else{
            $value="Can't be determined";
        }
    }
    echo"{$Data} : {$value} <br>";
}

?><hr>
</html>