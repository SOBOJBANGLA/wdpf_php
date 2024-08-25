<?php $db = new mysqli("localhost:3310","root","","evidence") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $id =$_POST['company'];
       $db->query("DELETE FROM manufacturer WHERE id = '$id'");

       if($db->affected_rows){
        echo "Successfully deleted";
       }



    }
    
    
    ?>


    <?php
    $result =$db->query ("SELECT * FROM manufacturer");
     ?>

    <h3>All manufactures</h3>
    <form action="" method="post">
        <select name="company" >
            <option value=""> Select one</option>

            <?php while($row=$result->fetch_object()){ ?>
                <option value="<?php echo $row->id; ?>"> <?php echo $row->name; ?></option>


                <?php } ?>
            

        </select>
        <input type="submit" value="DELETE" name="submit">


    </form><br>

    <a href="products.php">All products</a>

</body>
</html>