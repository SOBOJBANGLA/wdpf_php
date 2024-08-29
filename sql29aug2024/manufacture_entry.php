<?php $db=new mysqli("localhost:3310","root","","tclk") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ans no-2</h2>
    <?php
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql= "CALL insert_manufacture('$name','$addr','$contact')";

        $insert = mysqli_query($db,$sql);

        if($insert){
            echo "Inserted";
        }



    }
    
    
    ?>


    <form action="" method="post">
        Name: <br>
        <input type="text" name="name"><br>
        Address: <br>
        <textarea name="addr" id=""></textarea><br>
        Phone: <br>
        <input type="text" name="contact"><br>
        
    <input type="submit" value="Submit" name="submit">

    </form><br>
    <a href="manufacture.php">Manufacture</a>

</body>
</html>