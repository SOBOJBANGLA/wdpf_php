<?php
 require_once "connect.php";

 $id= $_GET['id'];

 $sql = "DELETE FROM products WHERE id = '$id'";
 $delete = mysqli_query($conn,$sql);

 if($delete){
    header('location: read.php');
 }

?>