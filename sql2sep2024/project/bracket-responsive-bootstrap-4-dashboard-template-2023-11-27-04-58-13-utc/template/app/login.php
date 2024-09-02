<?php
require_once("dbconfig.php");
session_start();

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $md5=md5($pass);

   $result=$conn->query("SELECT * FROM users WHERE email ='$email' AND password='$md5'");
   $row=$result->fetch_assoc();

   if($result->num_rows==0){
    $_SESSION['login_err']="Email or password may wrong.Please try again.";
    header("location: index.php");
   }else{
    $_SESSION['email']=$email;
    $_SESSION['name']=$row['fullname'];
    header("location: dashboard.php");
   }

}


?>
