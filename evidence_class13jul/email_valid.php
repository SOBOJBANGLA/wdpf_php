<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Not a valid email";
        }else{
            echo "Email is valid";
        }
    }

    ?>


   <form action="" method="post">
    <input type="text" name="email" placeholder="Enter email"><br>
    <input type="submit" value="submit" name="submit">

   </form> 
</body>
</html>