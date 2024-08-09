<?php
require_once 'connect.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['c_pass'];

    $md5 = md5($pass);

    $msz= '';
    $msz1= '';
    $msz2= '';
    $msz3= '';
    $msz4= '';

    if(empty($fname)){
        $msz= "fill up this filled" ;
    }if(empty($lname)){
        $msz1= "fill up this filled" ;
    }if(empty($email)){
        $msz2= "fill up this filled" ;
    }if(empty($pass)){
        $msz3= "fill up this filled" ;
    }if(empty($c_pass)){
        $msz4= "fill up this filled" ;
    }
    if(!empty($fname) & !empty($lname) & !empty($email) & !empty($pass) & !empty($c_pass)){
        if($pass === $c_pass){
            $sql = "INSERT INTO user(fname,lname,email,password)VALUES('$fname','$lname','$email','$md5')";
            $insert = mysqli_query($conn,$sql);

            if($insert){
                header("location: login.php");
            }else{
                echo "Password not Matched";
            }
        }

    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h4>Registration</h4>
    <form action="" method="post">
        first name : <input type="text" name="fname" value="<?php if(isset($_POST['submit'])) {echo $fname;}?>"><br>
        <?php if(isset($_POST['submit'])) {echo"<h5 style=color:red> $msz</h5>";} ?> 
        Last name : <input type="text" name="lname" value="<?php if(isset($_POST['submit'])) {echo $lname;}?>"><br>
        <?php if(isset($_POST['submit'])){echo"<h5 style=color:red> $msz1</h5>"; }?>
        Email : <input type="text" name="email" value="<?php if(isset($_POST['submit'])){echo $email;}?>"><br>
        <?php if(isset($_POST['submit'])){echo"<h5 style=color:red> $msz2</h5>";} ?>
        Password : <input type="text" name="pass" value="<?php if(isset($_POST['submit'])) {echo $pass;} ?>" ><br>
        <?php if(isset($_POST['submit'])){echo"<h5 style=color:red> $msz3</h5>";} ?>
       Confirm-Password : <input type="text" name="c_pass"value="<?php if(isset($_POST['submit'])){echo $c_pass;}?>" ><br>
       <?php if(isset($_POST['submit'])){echo"<h5 style=color:red> $msz4</h5>";} ?>
       <input type="submit" value="Register" name='submit'>
    </form>
    <h4>Have an account? <a href="login.php">Login</a></h4>
</body>
</html>