<?php $db=new mysqli("localhost:3310","root","","tclk")  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ans no-4</h2>
    <h3>Product List</h3>

    <?php
    $sql = $db->query("SELECT * FROM product_price_above_5000");
    
    
    ?>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacture Id</th>
        </tr>

        <?php while($row=$sql->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td style="text-align: center;"><?php echo $row['manufacturer_id'] ?></td>
            </tr>


            <?php } ?>
    </table><br>

    <a href="manufacture.php">Manufactur</a>

</body>
</html>