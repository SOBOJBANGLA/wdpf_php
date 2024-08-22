<?php
 require_once ("db_config.php" );
 $id = $_GET['id'];

 $sql = "DELETE FROM category WHERE Id = '$id' ";

 $delete = $db->query($sql);

 if($delete){
   //echo "Delete";
    header('location: all_category.php');
 }

?>