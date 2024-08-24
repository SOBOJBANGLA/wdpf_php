<?php require_once "connect.php" ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $sql =$conn->query("SELECT * fROM products_above_5000_price");


    ?>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer_id</th>
        </tr>

<?php while($row = $sql->fetch_assoc()){ ?>

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