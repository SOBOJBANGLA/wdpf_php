<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Email not valid";
        }else if(strlen($pass)<8){
            echo "Password 8 characters required";
        }else{
            echo "Login valid";
        }
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="email" ><br>
        <input type="text" name="pass" ><br>
        <input type="submit" value="submit" name="submit"> 
    </form>
</body>
</html>