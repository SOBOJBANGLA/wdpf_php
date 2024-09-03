<?php $conn=new mysqli("localhost:3310","root","","tclk") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Manufacture</title>
</head>
<body>
    <h2>Ans-3</h2>

    <?php
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql= "CALL insert_manufacture('$name','$address','$contact')";

        $insert=mysqli_query($conn,$sql);

        if($insert){
            echo "Inserted";
        }else{
            echo "Not inserted";
        }


    }
    
    ?>

    <form action="" method="post">
        Name: <br>
        <input type="text" name="name" ><br>
        Address :  <br>
        <textarea name="address" ></textarea><br>
        Contact : <br>
        <input type="text" name="contact" ><br>

        <input type="submit" value="Submit" name="submit" >
    </form><br>

    <h2>Manufacture</h2>
    
    <form action="" method="post">
        <select name="company" >
            <option value="">Select one</option>
            <?php
            $sql = $conn->query("SELECT * FROM manufacturer");

            while($row=$sql->fetch_assoc()){
            ?>
            <option value="<?php echo $row['Id'] ?>"><?php echo $row['Id'] ?><?php echo $row['name'] ?></option>

            <?php } ?>

        </select><br><br>

        
    </form><br><br>

    <a href="manufacture.php">Manufacture</a>
</body>
</html>