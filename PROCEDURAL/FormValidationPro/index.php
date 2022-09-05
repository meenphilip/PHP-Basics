<?php
require("DB.php");


$status="";
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $message= $_POST["message"];
    if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])){
        $status="All Fields Are Compulsory";
    }else{
        if(strlen($name)>=255 || !preg_match("/^[A-Za-z\. ]*$/",$name)){
        $status="Please Enter a Valid Name";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $status="Please Enter a Valid E-mail";
        }else{
            $status="Your Message Was send";
            $name ="";
            $email ="";
            $message ="";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Contact us Here</h1>

        <form action="index.php" method="POST" class="main-form">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" class="gt-input"
                    value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $name;?>">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" class="gt-input"
                    value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $email;?>">
            </div>

            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="gt-input gt-text">
                <?php if($_SERVER['REQUEST_METHOD']=='POST') echo $message;?></textarea>
            </div>
            <input type="submit" name="submit" class="gt-button" value="submit">
            <div class="form-status">
                <?php echo $status;?>
            </div>

        </form>
    </div>

    <script src="main.js"></script>
</body>

</html>