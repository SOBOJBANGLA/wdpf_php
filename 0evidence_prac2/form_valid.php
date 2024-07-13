<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>

<body>

    <?php 
        if(isset($_POST["submit"])){
            $username  = $_POST["user"];
            $pattern ='/^[A-z0-9]+@[A-z]{4,8}$/';
            if (preg_match($pattern, $username)) {
            echo "valid username";
            }else {
            echo "Invalid username";
            }

            }

           /* if (preg_match('/^[A-z0-9_@]{4,8}$/', $username)) {
                echo "Invalid username";
                }*/
      
    ?>
    <form action="" method="post">
        <input type="text" name="user" > <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>