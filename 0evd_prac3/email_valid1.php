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
        $user = $_POST['user'];

       $pattern = '/^[A-z0-9]+@[A-z]{4,8}$/';
        if(preg_match($pattern,$user)){
            echo "User name is valid";
        }else{
            echo "User name is invalid";
        }
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="user" ><br>
        <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>