<?php $conn=new mysqli("localhost:3310","root","","classicmodels") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search page</title>
</head>
<body>

    <h3>Search Products</h3>
    <?php
    if(isset($_GET["search"])){
        //extract($_GET);

        $term = $_GET['term'];
      

        $sql = $conn->query("SELECT productCode,productName,buyPrice FROM products WHERE productName LIKE '%$term%'");

        $data=$sql->num_rows;
        echo "With the Keyword <b>'$term'</b> We have found <b>$data</b> number of records";


        

    }
   

     ?>

    <form action="" method="get">
        <input type="text" name="term" placeholder="Search here">
        <input type="submit" value="SEARCH" name="search">
    </form>

    <?php

   if(isset($_GET["search"])){
    while($row=$sql->fetch_object()){
        echo "Product Code:" . $row->productCode ."Product Name:" . $row->productName ."Product Price:" . $row->buyPrice . "<hr>";
    }

   }
    ?>


</body>
</html>