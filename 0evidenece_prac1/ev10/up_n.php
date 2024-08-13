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
            $file_tmp =  $_FILES['photo']['tmp_name'];
            $file_size = $_FILES['photo']['size'];
            $allowed_size =409600;
            $file_data = pathinfo($file_name);
            $file_ext =strtolower($file_data['extension']);
            $allowed_ext = ['jpg','jpeg','png','txt','pdf'];
            $upload = "photo/".$file_name;

            $error = [];

            if($file_size>$allowed_size){
                $error[] = "Within 400kb allowed";
            }
            if(!in_array($file_ext,$allowed_ext)){
                $error[]= "jpg,jpeg,png,txt,pdf are allowed";
            }
            if(count($error)>0){
                foreach($error as $err){
                    echo $err . "<br>";
                }
            }
            else{
                $status = move_uploaded_file($file_tmp,$upload);
                if($status)echo "Upload successful";
            }
        }
       
    

    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" ><br>
        <input type="submit" value="upload" name="submit">
    </form>
</body>
</html>