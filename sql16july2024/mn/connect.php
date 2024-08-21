<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "w5";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "Connection failed".$conn->connect_error;
    exit();
}

?>