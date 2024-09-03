<?php $conn=new mysqli("localhost:3310","root","","tclk") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacture</title>
    <style>
        th,td{
            border: 1px solid;
            text-align: center;
        }table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Ans-2</h2>
    <h3>Manufacturer</h3>

    <?php 

    if(isset($_POST['submit'])){
        $mid=$_POST['company'];

        $sql1="DELETE FROM manufacturer WHERE Id='$mid'";

        $delete=mysqli_query($conn,$sql1);

        if($delete){
            echo "Deleted";
        }
    }


    ?>

    <form action="" method="post">
        <select name="company" >
            <option value="">Select one</option>
            <?php
            $sql = $conn->query("SELECT * FROM manufacturer");

            while($row=$sql->fetch_assoc()){
            ?>
            <option value="<?php echo $row['Id'] ?>"><?php echo $row['Id'] ?><?php echo $row['name'] ?></option>

            <?php } ?>

        </select><br><br>

        <input type="submit" value="Delete" name="submit">
    </form><br><br>

    <h2>Product</h2>

    <?php
    $sql2= $conn->query("SELECT * FROM product_price_above_5000");
    
    ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer id</th>
        </tr>

        <?php while($rowe=$sql2->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $rowe['id'] ?></td>
                <td><?php echo $rowe['name'] ?></td>
                <td><?php echo $rowe['price'] ?></td>
                <td><?php echo $rowe['manufacturer_id'] ?></td>
            </tr>


            <?php } ?>

    </table>
    
</body>
</html>