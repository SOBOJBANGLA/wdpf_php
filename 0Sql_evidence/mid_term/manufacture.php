<?php $db=new mysqli("localhost:3310","root","","tclk")  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacture</title>
</head>
<body>
    <h2>Ans no-3</h2>
    <?php 
    if(isset($_POST['submit'])){
        $mid = $_POST['company'];

        $sql1 = "DELETE FROM manufacturer WHERE Id ='$mid'";

        $delete = mysqli_query($db,$sql1);

        if($delete){
            echo "Delete";
        }



    }
    
    
    
    ?>


    <form action="" method="post">
        <select name="company" >
            <option value="">Select one</option>

            <?php 
            $sql = $db->query("SELECT * FROM manufacturer");
            
            while($row= $sql->fetch_assoc()){
            ?>

            <option><?php echo $row['Id'] ?><?php echo $row['name'] ?></option>

                <?php } ?>
        </select><br>

        <input type="submit" value="Delete" name="submit">

    </form><br>

    <a href="product.php">Product</a><br><br>
    <a href="manufacture_entry.php">New</a>

</body>
</html>