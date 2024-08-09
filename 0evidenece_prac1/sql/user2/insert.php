<?php
require_once 'connect.php';
session_start();

if($_SESSION['login']){
    echo $_SESSION['login'];
}else{
    header("location: login.php");
}
?>
<h4><a href="logout.php">Logout</a></h4>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        //extract($_POST);
        //$image = $_FILES['image'];
        $filename =$_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $upload= 'photo/'.$filename;
        move_uploaded_file($tmp,$upload);

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $address = $_POST['add'];
        $dob = $_POST['date'];
        $district = $_POST['dis'];
       // $subject = $_POST['sub'];
        $subject = implode(", ", $_POST['sub']);
        $sql = "INSERT INTO st_info (image,name,gender,address,birth,district,subject) VALUES('$upload','$name','$gender','$address','$dob','$district','$subject') ";
        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "Data inserted";
            header('location: read.php');
        }else{
            echo "Data no inserted";
        }   
    }
    
    ?>

    <h3>Student Information</h3>
    <form action="" method="post" enctype="multipart/form-data" >
        Upload picture: 
        <input type="file" name="image" ><br><br>
       
        Name:
        <input type="text" name="name" > <br><br>
       
        Gender: 
        <input type="radio" name="gender" value="Male"> Male 
        <input type="radio" name="gender" value="Female"> Female  <br><br>
        
        Address:
         <textarea name="add" ></textarea><br><br>
        
         Date of birth: 
         <input type="date" name="date" ><br><br>
        
         District : 
         <select name="dis" >
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Cumilla">Cumilla</option>
        </select><br><br>
        
        Subject: 
        <input type="checkbox" name="sub[]" value="NT">NT
        <input type="checkbox" name="sub[]" value="GAVE">GAVE 
        <input type="checkbox" name="sub[]" value="WDPF">WDPF <br><br>

        <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>
