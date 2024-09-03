<?php $conn= new mysqli("localhost:3310","root","","company") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacture </title>
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
    <h2>Ans-3</h2>
    <h3>Manufacture</h3>

    <?php
    if(isset($_POST['submit'])){
        $mid = $_POST['company'];

        $sql2="DELETE FROM manufacturer WHERE id = '$mid'";
        $delete = mysqli_query($conn,$sql2);

        if($delete){
            echo "<h4 style=color:red>Delete</h4>";
        }
    }
    
    
    ?>

    <form action="" method="post">
        <select name="company" >
            <option value="">Select one</option>

            <?php
            $sql1= $conn->query("SELECT * FROM manufacturer");

            while($rowe= $sql1->fetch_assoc()){
            
            ?>

            <option value="<?php echo $rowe['id'] ?>"><?php echo $rowe['id'] ?><?php echo $rowe['name'] ?></option>


<?php } ?>

        </select><br><br>

        <input type="submit" value="Delete" name="submit">
    </form><br><br>



    <h3>Product </h3>

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