<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ut</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){

      $filename = $_FILES['photo']['name'];
       $temp =$_FILES['photo']['tmp_name'];
       $upload = "photo/".$filename;
       $filetype =$_FILES['photo']['type'];

       $filedata =pathinfo($filename);
       $file_ext = strtolower($filedata['extension']);
       $allowed_ext =["jpg","jpeg","png"];

       $filesize =$_FILES['photo']['size'];
       $allowed_size =307200;

       $errors =[];

       if($filesize>$allowed_size){
        $errors[] =" Within 300 kb is allowed";
       }

       if(!in_array($file_ext,$allowed_ext)){
        $errors[] = "allowed jpg,jpeg,png";
       }
       if(count($errors)>0){
        foreach($errors as $err){
            echo $err ."<br>";
        }
       }
       else{
        $status =move_uploaded_file($temp,$upload);
        if($status) echo "upload successfull";
       }
       

    }

    ?>

<img src="photo/<?php if(isset($filename)){echo $filename;}?>" alt="">

    <form action="" method="post" enctype="multipart/form-data">
        Image: <input type="file" name="photo" ><br><br>
        <input type="submit" value="SEND" name="submit">

    </form>
</body>
</html>