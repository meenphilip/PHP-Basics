<?php
if(isset($_POST["Submit"])){
    $Username=$_POST["Username"];
    $Password=$_POST["Password"];
    if($Username=="Meen" && $Password=="tycoon"){
        echo "<h2>Welocme:<marquee > {$_POST["Username"]}</marquee></h2>";
    }
    else{
        echo "<h2>Account Does't Exits | Please Try Again</h2>";
    }

}
else{
    echo"<h2>Login Required</h2>";
}
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM WITH PHP FUNCTIONALITY</title>
    <style>
    input[type="text"],input[type="Password"],textarea{
    border: 1px solid dashed;
    background-color: rgb(221,216,212);
    width: 600px;
    padding:.5em;
    font-size: 1.0em;
    display: inline-block;
    }

    input[type="Submit"] {
    color: #fff;
    font-family: Bitter, Georgia, Times, "Times New Roman", sans-serif;
    font-size: 1.0em;
    background-color: #5d0580;
    border: 5px solid;
    border-bottom-left-radius: 35px;
    border-bottom-right-radius: 35px;
    border-top-left-radius: 35px;
    border-top-right-radius: 35px;
    border-color: rgb(221, 216, 212);
    font-weight: bold;
    float: left;
}
    </style>
</head>
<body>
    <legend>HTML 5 FORM</legend>
    <fieldset>
    <form action="form.php" method="POST">
    <label for="Username"> <strong>Username:</strong></label><br>
    <input type="text" name="Username" value=""><br>
    <label for="Password"><b>Password:</b></label><br>
    <input type="Password" name="Password" value=""><br><br>&nbsp;
    <input type="Submit" name="Submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>