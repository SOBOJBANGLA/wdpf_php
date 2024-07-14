<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
       $pattern = '/^[A-z0-9]+@[A-z]+[.A-z]{4,8}$/';
        if(preg_match($pattern,$email)){
            echo "Email is valid";
        }else{
            echo "Email is invalid";
        }
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="email" ><br>
        <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>