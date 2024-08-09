<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <?php 
    require_once 'connect.php';
    $id = $_GET['idn'];
    $nm = $_GET['nm'];
    //$gn = $_GET['gn'];
    $ad = $_GET['ad'];
    $br = $_GET['br'];
   /* $dt = $_GET['dt'];
    $sb = $_GET['sb'];*/
    $query = "SELECT * FROM st_info WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

    if(isset($_POST['submit'])){
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
        $subject = implode(',', $_POST['sub']);

        $sql = "UPDATE st_info SET image='$upload', name='$name',gender='$gender',address='$address',birth='$dob',district='$district',subject='$subject' WHERE id=$id ";
        $update = mysqli_query($conn,$sql);

        if($update){
            echo "Data updated";
            header('location: read.php');
        }else{
            echo "Data no updated";
        }
        //$result = mysqli_fetch_assoc($update);
    }
    
    ?>

    <h3>Student Information</h3>
    <form action="" method="post" enctype="multipart/form-data">
        Id:
        <input type="text" name="name" value="<?php echo $id;?>" > <br><br>
        
        Upload picture: 
        <input type="file" name="image" value="<?php echo $row['image'];?>"><img src="<?php echo $row['image'];?>" style='height:60px;width: 80px' ><br><br>
        
        Name:
        <input type="text" name="name"value="<?php echo $nm;?>" > <br><br>
        
        Gender: 
        <input type="radio" name="gender" value="Male" <?php if($row['gender'] == 'Male') echo 'checked'; ?>> Male 
        <input type="radio" name="gender" value="Female" <?php if($row['gender'] == 'Female') echo 'checked'; ?>> Female<br><br>
        
        Address:
         <textarea name="add"  ><?php echo $ad;?></textarea><br><br>
        
         Date of birth: 
        <input type="date" name="date" value="<?php echo $br;?>" ><br><br>
        
        District : 
        <select name="dis">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['district'] == 'Dhaka') echo 'selected'; ?>>Dhaka</option>
            <option value="Cumilla" <?php if($row['district'] == 'Cumilla') echo 'selected'; ?>>Cumilla</option>
        </select><br><br>
       
        Subject:
        <input type="checkbox" name="sub[]" value="NT" <?php if(in_array('NT', explode(',', $row['subject']))) echo 'checked'; ?>>NT
        <input type="checkbox" name="sub[]" value="GAVE" <?php if(in_array('GAVE', explode(',', $row['subject']))) echo 'checked'; ?>>GAVE 
        <input type="checkbox" name="sub[]" value="WDPF" <?php if(in_array('WDPF', explode(',', $row['subject']))) echo 'checked'; ?>>WDPF <br><br>

        <input type="submit" value="Update" name="submit">

    </form>
</body>
</html>
