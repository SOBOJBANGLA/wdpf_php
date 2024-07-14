<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email_valid</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $email =$_POST['email'];
        $pass = $_POST['pass'];

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          echo "Email address is wrong";
        }else if(strlen($pass)<8){
            echo "Password must be 4 to 8 digit";
        }else{
            echo "Login Valid";
        }
    }
    
    ?>

    <form action="" method="post">
     Email:   <input type="text" name="email" placeholder="Enter email" ><br>
     Password: <input type="password" name="pass" placeholder="Enter password"><br>

     <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>