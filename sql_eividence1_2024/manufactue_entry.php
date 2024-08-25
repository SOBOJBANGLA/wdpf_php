<?php $db = new mysqli("localhost:3310","root","","evidence") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        extract($_POST);
        $db->query("CALL add_manufacturer('$name','$address','$contact')");


    }
    
    ?>


    <h3>New Manufacture</h3>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Manufacture name"><br>
        <textarea name="address" placeholder="Enter address"></textarea><br>
        <input type="text" name="contact" ><br>
        <input type="submit" value="SUBMIT" name="submit">

    </form>
    
</body>
</html>