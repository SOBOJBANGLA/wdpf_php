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
           
            $file_name = $_FILES['photo']['name'];
            $file_tmp = $_FILES['photo']['tmp_name'];
            $file_size = $_FILES['photo']['size'];
            $allowed_size = 409600;

            $upload = "photo/".$file_name;
            $file_data = pathinfo($file_name);
            $file_ext = strtolower($file_data['extension']);
            $allowed_ext = ['jpg','jpeg','png','pdf','docx'];

            $error = [];

            if($file_size>$allowed_size){
                $error[] = "Within 400 kb allowed";
            }
            if(!in_array($file_ext,$allowed_ext)){
                $error[] = "jpg,jpeg,png,pdf,docx are allowed";
            }

            if(count($error)>0){
                foreach($error as $err){
                    echo $err . "<br>";
                }
            }
            else{
                $status = move_uploaded_file($file_tmp,$upload);
                if($status) echo "Upload successful";
            }


        }

    ?>

    <img src="photo\<?php if(isset($_POST['submit'])) {echo $file_name;} ?>" width="120px" height="120px">


    <form action="" method="post" enctype="multipart/form-data">
        Image : <input type="file" name="photo" ><br>
        <input type="submit" value="upload" name="submit">
    </form>
</body>
</html>