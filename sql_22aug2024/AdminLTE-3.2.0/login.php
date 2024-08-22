<?php


if(isset($_POST['submit'])){
require_once ("db_config.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);

$result = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
$row = $result->fetch_assoc();


 if($result->num_rows==0){
$_SESSION['msg'] = "Email or password is wrong";
header("Location:index.php");
 }else{
    $_SESSION['name'] =$row['fullname'] ;
    $_SESSION['email'] =$email;
    header("Location:dashboard.php");
 }

}


?>