<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   /*  if (isset($_POST['submit'])) {
         $name = $_POST['name'];
         $email = $_POST['email'];
         $pass = $_POST['pass'];
        echo "Name:$name <br> Email:$email <br> Password:$pass ";
    }
 */     //same page show but form action empty and other page show from action that page rename.

    ?>
    


    <form action="contact.php" method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Password: <input type="password" name="pass"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>