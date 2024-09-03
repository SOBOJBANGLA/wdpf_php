<?php $conn= new mysqli("localhost:3310","root","","company") ?>

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
    <h3>Product Price Above 5000</h3>

    <?php
    $sql= $conn->query("SELECT * FROM product_5000_above");
    
    ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacture id</th>
        </tr>

        <?php while($row=$sql->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['manufacturer_id'] ?></td>
            </tr>

            <?php } ?>

    </table>
</body>
</html>