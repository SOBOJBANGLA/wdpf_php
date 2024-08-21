<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    require_once "connect.php";

    $read = $conn->query("SELECT * FROM products");
    $num = 1;
    ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>

        <?php while($output= $read->fetch_assoc()) {?>
            <tr>
            <td><?php echo $num; ?></td>
            <td><?php echo $output['product_name']; ?></td>
            <td><?php echo $output['product_details']; ?></td>
            <td><?php echo $output['product_price']; ?></td>
            <td><?php echo $output['product_quantity']; ?></td>
            <td><a onclick="return confirm('Are you sure to delete')" href="delete.php?id=<?php echo $output['id']; ?>"><img src="delete.png" width="15"></a></td>
        </tr>

            <?php $num++;} ?>

    </table>
</body>
</html>