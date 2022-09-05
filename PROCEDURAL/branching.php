<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching-Statements | php</title>
</head>
<body>
<h1>Branching Statement</h1>
<p>such=>{continue,break,goto}</p> <br>

    <?php
    echo"Skipping variable scola <br>";
    $names=array("Meen","Tito","Scola","Maureen","Ken","Fatuma","Etom","Yunis","mike");

    for($i=0;$i<=8;$i++){
        if($names[$i]=="Scola"){
            continue;
        }
        echo "$names[$i]<br>";
        } 
    print_r($names);
    
    ?><hr>
    <h1>Show until your variable of scola </h1>
        <?php
    $names=array("Meen","Tito","Scola","Maureen","Ken","Fatuma","Etom","Yunis","mike");

    for($i=0;$i<=8;$i++){
        if($names[$i]=="Scola"){
            break;
        }
        echo "$names[$i]<br>";
        } 
    print_r($names);
    
    ?>
</body>
</html>