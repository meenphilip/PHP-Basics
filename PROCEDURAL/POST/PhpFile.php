<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FILE</title>
</head>
<body>
    <?php
    print_r($_POST);
    echo"<hr>";
    ?>

    <?php
    $Username=$_POST["Username"];
    $Password=$_POST["Password"];
    $Submit=$_POST["Submit"];

    if(isset ($_POST["Submit"])){
        echo "<h2>Login Successful</h2><hr>";
       // echo $_POST["Username"]."<hr>";
    }

    /*if(isset($Username) && !empty($Username)){
        echo "<h2>Username is set As: $Username</h2>";
    }else{
        echo"<h2>Username Not Detected!!</h2>";
    }
    if(isset($Password) && !empty($Password)){
        echo "<h2>Username is set As: $Password</h2>";
    }else{
        echo"<h2>Password Not Detected!!</h2>";
    }*/


    //  SETTING USERNAME AND PASSWORD BY DEFAULT
    if(isset($_POST["Username"])){
       $Username= $_POST["Username"];
       echo"$Username<br>";
    }
    else{
        $Username="";
    }
    if(isset($_POST["Password"])){
       $Username= $_POST["Password"];
       echo"$Password<br>";
    }
    else{
        $Password="";
    }
    ?>
</body>
</html>