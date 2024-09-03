<?php $conn=new mysqli("localhost:3310","root","","tclk") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
    <h2>Ans-4</h2>
    <?php
    $sql= $conn->query("SELECT * FROM product_price_above_5000");
    
    ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer id</th>
        </tr>

        <?php while($row=$sql->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['manufacturer_id'] ?></td>
            </tr>


            <?php } ?>

    </table><br><br>
    <a href="manufacture.php">Manufacture</a>

</body>
</html>