<?php
$host= "localhost:3310";
$user="root";
$pass="";
$db= "w60";

$conn=new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "Connect failed".$conn->connect_error;
    exit();
}


?>