<?php require_once ("db_config.php" ); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Category edit</h3>
    <?php
    $id = $_REQUEST['id'];

    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "UPDATE category SET name='$category' WHERE Id = $id";
        $update = mysqli_query($db,$sql);

        if($update){
            echo "Data updated";
            header('location:all_category.php');
        }else{
            echo "Data not inserted";
        }
    }

    $sql = "SELECT * FROM category WHERE Id = '$id'";
    $data = $db->query($sql);
    $row = $data->fetch_assoc();

    ?>

    <form action="" method="post">
        <input type="text" name="category"  value="<?php echo $row['name'] ?>" >
        <input type="submit" value="Update" name="submit">
    </form>
</body>
</html>