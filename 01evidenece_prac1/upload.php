<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        $filename = $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];
        $upload = "photo/".$filename;
        $file_size = $_FILES['photo']['size'];
        $allowed_size = 307200;
        $filedata = pathinfo($filename);
        $file_ext = strtolower($filedata['extension']);
        $allowed_ext = ["jpg","jpeg","png"];
        $error =[];

        if($file_size>$allowed_size){
            $error[] = " 300 kb allowed ";
        }
        if(!in_array($file_ext,$allowed_ext)){
            $error[] = "jpg,jpeg,png are allowed ";
        }
        if(count($error)>0){
            foreach($error as $err){
                echo $err . "<br>";
            }

        }else {
            $status =move_uploaded_file($tmp,$upload);
            if($status)echo "Upload Successfull";
        }



    }

    ?>
    <img src="photo\<?php if(isset($filename)){echo $filename;} ?>" alt="">


    <form action="" method="post" enctype="multipart/form-data">
     Picture:   <input type="file" name="photo" ><br>
        <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>