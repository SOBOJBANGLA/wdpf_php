<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h1>Ans no - 1</h1>

    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email is invalid";
        }else if(strlen($pass)<6){
            echo "Password must be at least 6 characters";
        }else{
            echo "Login Valid";
        }
    }
    
    ?>

    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter email"><br>
     <input type="password" name="pass" placeholder="Enter password"><br>
     <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>