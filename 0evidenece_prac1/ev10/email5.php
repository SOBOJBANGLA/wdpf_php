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
        }else if(strlen($pass)>=4 && strlen($pass)<=8 ){
            echo "Password must be 8 charecter";
        }else{
            echo "Login valid";
        }
    }
     ?>
    <form action="" method="post">
        User Name: <input type="text" name="email" ><br>
        Password : <input type="text" name="pass" ><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
