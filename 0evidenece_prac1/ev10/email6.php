<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email1</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pattern = '/^.{4,8}$/';

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Email invalid";
        }else if(preg_match($pattern,$pass)){
            echo "Password must be 4 to 8 charecter";
        }else{
            echo "Login valid";
        }
    }
    
    ?>


    <form action="" method="post">
        Email:<input type="text" name="email" ><br>
        Password:<input type="text" name="pass" ><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>