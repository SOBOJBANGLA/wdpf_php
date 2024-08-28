<?php require_once ("db_config.php" ); ?>
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
    $sql = $db->query("SELECT * FROM category");
    

    ?>
    <table>
        <tr>
            <th>ID</th>
        <th>Category List</th>
        <th>Action</th>
        </tr>
        <?php while($row = $sql->fetch_assoc()){ ?>
            <tr>
            <td><?php echo $row['id'] ;?></td>
                <td><?php echo $row['name'] ;?></td>
                <td><a onclick="return confirm('Are you sure to delete')" href="category_delete.php?id=<?php echo $row['Id'] ;?>"><img src="bin.png" width="15"></a>
            ||
            <a  href="category_edit.php?id=<?php echo $row['Id'] ;?>"><img src="update.png" width="15"></a>
            </td>

            </tr>

        <?php } ?>
    </table>
</body>
</html>
