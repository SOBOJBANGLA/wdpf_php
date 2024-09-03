<?php $conn= new mysqli("localhost:3310","root","","company") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry</title>
</head>
<body>
    <h2>Ans-2</h2>

    <h3>Insert Manufacture </h3>

    <?php
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "CALL add_manufacturer('$name','$address','$contact')";

        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "<h4 style=color:green>Insert data</h4>";
        }

    }
    
    ?>

    <form action="" method="post">
        Name : <br>
        <input type="text" name="name" ><br>
        Address :  <br>
        <textarea name="address" ></textarea><br>
        Contact No :  <br>
        <input type="text" name="contact" ><br>

        <input type="submit" value="Submit" name="submit">

    </form><br><br>

    <h2>Manufacturer list</h2>

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

       
    </form><br><br>


</body>
</html>