<?php require_once ("db_config.php" ); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Product Edit</h2>
    <?php
    // category list collect
    $sql = "SELECT * FROM category";
    $cats=$db->query($sql);

//pick id from URL and from
   $id= $_REQUEST['id'];
  

    if(isset($_POST['submit'])){
        extract($_POST);
        

       $sql= "UPDATE products SET product_name='$name',product_details='$details',product_price='$price',product_quantity='$quantity', product_category ='$category' WHERE id = '$id'";

       
      $result= $db->query($sql);
      if($db->error){
        echo "Failed" ;
       }else{
        echo "Successfully Added";
       }
    }
    //getting data from table
    $sql= "SELECT * FROM products WHERE id = '$id'";
    $data = $db->query($sql);
    $row = $data->fetch_object();
    //print_r($row);


    ?>
    

    <form action="" method="post">
    Name: <br>
    <input type="text" name="name" value="<?php echo $row->product_name  ?>" ><br>
   Details : <br>
    <textarea name="details"  ><?php echo $row->product_details  ?></textarea><br>
   Price:  <br>
   <input type="text" name="price" value="<?php echo $row->product_price  ?>" ><br>
   Quantity: <br>
   <input type="number" name="quantity" value="<?php echo $row->product_quantity  ?>" ><br>
   Category:  <br>
    <select name="category" >
        <option value="">Select one</option>
        <?php
        while($cat = $cats->fetch_assoc()){ ?>
            <option value="<?php echo $cat['Id'] ?>" <?php echo $row->product_category == $cat['Id']? "selected" : " ";?>><?php echo $cat['name'] ?></option>


      <?php  }?>
         
    </select><br>

   <input type="submit" value="update" name="submit"><br><br>
   <input type="hidden" name="id" value="<?php echo $id  ?>">


    </form>

    <a href="all_products.php">Product List</a>
</body>
</html>