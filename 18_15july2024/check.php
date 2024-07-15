<?php
$userEmail = "abdullah@gmail.com";
$UserPass = "123456";

$email= $_POST['email'];
$password= $_POST['password'];

if( $userEmail ==$email && $password == $userPass){
    session_start();

    $_SESSION['email']=$email;
    
    header("Location:h.php");
}else{
    header("Location:login.php");
}



?>