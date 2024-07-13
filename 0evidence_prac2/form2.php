<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Validation with PHP</title>
</head>
 
<body>
<?php
    if(isset($_POST['email'])){
        
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if($email == "" || $pass == ""){
            echo "Must be entered email & password";
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Email address is wrong";
            }else if(strlen($pass)<8 ){
                echo "password must be 4 to 8 character";
            }else{
                echo "Login valid";
            }
        }
       
    }
?>   
<form method="post" action="">
    <input type="text" name="email" placeholder="enter email address"><br><br>
    <input type="password" name="password" placeholder="enter password"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
