<?php require_once ("db_config.php" ); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Category entry</h3>
    <?php

    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "INSERT INTO category(Id,name)VALUES(NULL,'$category')";
        $insert = mysqli_query($db,$sql);

        if($insert){
            echo "Data inserted";
            header('location:product_entry.php');
        }else{
            echo "Data not inserted";
        }
    }

    ?>

    <form action="" method="post">
        <input type="text" name="category" >
        <input type="submit" value="submit" name="submit">
    </form>

    <a href="all_category.php">Category list</a>
</body>
</html>