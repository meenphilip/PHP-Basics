<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach loop</title>
</head>
<body>
    <?php
    function sum(){
        $marks = array(45, 67, 78, 89, 99, 100);
        $total=0;
        $avg=0;
        foreach ($marks as $mark){
            $total+=$mark;
            $avg = $total / 6;
        }
        
        echo"the marks scored are as follows: {$mark} <br>";
        echo"the total : {$total}<br>";
        echo "the Average : {$avg}";
    }
    sum();
    ?>
    <hr>
    <?php
    $products=array("Product_name:"=>"Brown Bread",
                    "Product_price:"=>"ksh 50",
                    "Product_mnf_date:"=>'12/12/2020',
                    "Product_exp_date:"=>'12/17/2020',
                    "Product_quantity:"=>'250gs'
);
    foreach($products as $key=> $value){
        $data= ucwords(str_replace("_"," ",$key));
        

        echo"{$data}{$value} <br>";
    }

    ?>
</body>
</html>