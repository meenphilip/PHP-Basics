<?php
$NameError="";
$EmailError="";
$GenderError="";
$WebsiteError="";

if(isset($_POST['Submit'])){
    if(empty($_POST["Name"])){
        $NameError="Name is Required";
    }
    else{
        $Name=Test_User_Input($_POST["Name"]);
    if(!preg_match("/^[A-Za-z\. ]*$/",$Name)){
        $NameError="Only Letters and White space Allowed!!!";
        }
    }
    if(empty($_POST["Email"])){
        $EmailError="Email is Required";
    }
    else{
        $Email=Test_User_Input($_POST["Email"]);
        if(!preg_match("/[A-Za-z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)){
        $EmailError="Invalid Email Format!!!";
        }
    }
    if(empty($_POST["Gender"])){
        $GenderError="Gender is Required";
    }
    else{
        $Gender=Test_User_Input($_POST["Gender"]);
    }
    if(empty($_POST["Website"])){
        $WebsiteError="Website is Required";
    }
    else{
        $Website=Test_User_Input($_POST["Website"]);
    if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)){
            $WebsiteError="Invalid Website Address Format!!!";
        }
    }
    if(!empty($_POST["Name"])&&!empty($_POST["Email"])&&!empty($_POST["Gender"])&&!empty($_POST["Website"])){
        if((preg_match("/^[A-Za-z\. ]*$/",$Name)==true)&&(preg_match("/[A-Za-z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)==true)&&(preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)==true)){
        echo"<h2> Your Submitted Information</h2><br>";
        echo"Name:".ucwords($_POST["Name"])."<br>";
        echo"Email:{$_POST["Email"]}<br>";
        echo"Gender:{$_POST["Gender"]}<br>";
        echo"Website:{$_POST["Website"]}<br>";
        echo"Comments:{$_POST["Comments"]}<br>";
}
else{
    echo'<span class="Error">Please Fill Out The Form As Required</span>';
}
}

}
function Test_User_Input($Data) {
return $Data; 
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM VALIDATION WITH PHP</title>
    <style type="text/css">
    input[type="text"],input[type="email"],textarea{
    border: 1px solid dashed;
    background-color: rgb(221,216,212);
    width: 600px;
    padding:.5em;
    font-size: 1.0em;
    display: inline-block;
    }
    .Error{
        color: red;
    }
    div {
    border-radius: 5px;
    background-color: #f2f2f2;
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
input[type=Submit]:hover {
    background-color: #45a049;
}

    
    </style>
</head>
<body>
<div>
    <form action="formValidation.php" method="post">
    <legend><h3>* Please Fill out the Folowing Fields*<h3></legend>
    <fieldset>
    Name:<br>
    <input type="text" class="input" name="Name" value=""><span class="Error">*<?php echo $NameError;?></span><br>
    E-mail:<br>
    <input type="email" class="input" name="Email" value=""><span class="Error">*<?php echo $EmailError;?></span><br>
    Gender:<br>
    <input class="radio" type="radio" name="Gender" value="Male">
    <input class="radio" type="radio" name="gender" value="Female"><span class="Error"> *<?php echo $GenderError;?></span><br>
    website:<br>
    <input type="text" class="input" name="Website" value=""><span class="Error">*<?php echo $WebsiteError;?></span><br>
    Comments:<br>
    <textarea name="Comments" id="" cols="30" rows="10"></textarea><br><br>
    <input type="Submit" name="Submit" value="Submit Your Information">
    </fieldset>
    </form>
    </div>
</body>
</html>