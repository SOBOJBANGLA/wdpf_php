<?php
require_once 'connect.php';
session_start();

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $md5 = md5($pass);

    $msz= '';
    $msz1= '';
    

    if(empty($email)){
        $msz= "fill up this filled" ;
    }if(empty($pass)){
        $msz1= "fill up this filled" ;
    }
    if(!empty($email) & !empty($pass)){
            $sql = "SELECT * FROM user WHERE email ='$email' AND password='$md5' ";
            $query = $conn->query($sql);

            if($query->num_rows>0){
                $_SESSION['login']='login successful';
                header("location: insert.php");
            }else{
                echo "Not Found";
                echo $sql;
            }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h4>Login </h4>
    <form action="" method="post">
       
        Email : <input type="text" name="email" value="<?php if(isset($_POST['submit'])){echo $email;}?>"><br><br>
        <?php if(isset($_POST['submit'])){echo"<h5 style=color:red> $msz</h5>";} ?>
        Password : <input type="text" name="pass" value="<?php if(isset($_POST['submit'])) {echo $pass;} ?>" ><br>
        <?php if(isset($_POST['submit'])){echo"<h5 style=color:red> $msz1</h5>";} ?>
     
       <input type="submit" value="Login" name='submit'>
    </form>
    <h4>Are you Have an account? <a href="register.php">Register</a></h4>
</body>
</html>