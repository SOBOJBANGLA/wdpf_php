<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    <h1>Ans no-1</h1>

    <?php
    if(isset($_POST['submit'])){
        $user = $_POST['user'];

        $pattern = '/^[A-z0-9]+@[A-z]{4,8}$/';

        if(preg_match($pattern, $user)){
            echo "<h3>Login valid</h3>";
        }else {
            echo "<h3>User name is invalid</h3>";
        }
    }
    
    ?>

    <form action="" method="post">
        <b>User Name:
    <input type="text" name="user" placeholder="username"><br>
    <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>