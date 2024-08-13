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
        $user = $_POST['user'];

        $pattern = '/^[A-z0-9]+@[A-z]+[.A-z]{2,4}$/';

        if(preg_match($pattern,$user)){
            echo "User name valid";
        }else{
            echo "User name not valid";
        }
    }
     ?>
    <form action="" method="post">
        User Name: <input type="text" name="user" ><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
