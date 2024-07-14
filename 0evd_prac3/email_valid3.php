<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email_valid3</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Email is invalid";
        }else{
            echo "Email is valid";
        }


    }

    ?>

    <form action="" method="post">
        <input type="text" name="email" ><br>
        <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>