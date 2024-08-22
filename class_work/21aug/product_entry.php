<?php require_once ("db_config.php" ); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Product entry</h2>
    <?php
    // category list collect
    $sql = "SELECT * FROM category";
    $cats=$db->query($sql);


    if(isset($_POST['submit'])){
        extract($_POST);
        

       $sql= "INSERT INTO products(id,product_name,product_details,product_price,product_quantity,product_category) VALUES (NULL,'$name','$details','$price','$quantity','$category')";

     
      $result= $db->query($sql);
       if($db->error){
        echo "Failed" ;
       }else{
        echo "Successfully Added";
       }
    }


    ?>
    

    <form action="" method="post">
    Name: <br>
    <input type="text" name="name"  ><br>
   Details : <br>
    <textarea name="details" id=""></textarea><br>
   Price:  <br>
   <input type="text" name="price" ><br>
   Quantity: <br>
   <input type="number" name="quantity" ><br>
    Category:  <br>
    <select name="category" >
        <option value="">Select one</option>
        <?php
        while($row = $cats->fetch_assoc()){ ?>
            <option value="<?php echo $row['Id'] ?>"><?php echo $row['name'] ?></option>


      <?php  }?>
         ?>
    </select><br>
   <input type="submit" value="submit" name="submit"><br><br>


    </form>

    <a href="all_products.php">Product List</a>
</body>
</html>