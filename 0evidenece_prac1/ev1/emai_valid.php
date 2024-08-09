<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            //echo $email;
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Email address is valid";
            } else{
                echo "Email address is invalid";
            }
        }
    ?>

    <form method="post" action="">
        <input type="text" name="email" placeholder="Enter email address">
        <input type="submit" name="submit" value="VALIDATION">
    </form>
</body>
</html>