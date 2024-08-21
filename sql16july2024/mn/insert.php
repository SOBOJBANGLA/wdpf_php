<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <?php
    require_once "connect.php";

    if(isset($_POST['submit'])){

        extract($_POST);

        $sql = "INSERT INTO products(id,product_name,product_details,product_price,product_quantity) VALUES(NULL,'$name','$details','$price','$quantity')";

        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "Data inserted";
        }else{
            echo "Data not inserted";
        }
    }
    
    
    ?>


    <form action="" method="post">
        Name : <br>
        <input type="text" name="name" ><br>
        Details: <br>
        <textarea name="details" ></textarea><br>
        Price : <br>
        <input type="text" name="price" ><br>
        Quantity: <br>
        <input type="text" name="quantity" ><br>

        <input type="submit" value="submit" name="submit">
    </form><br><br>
    <a href="read.php">Product list</a>
</body>
</html>