<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    <?php 
    if(isset($_POST["submit"])){
    //print_r($_POST);
    //echo "<hr>";
    // print_r($_FILES);

     $temp = $_FILES['photo']['tmp_name'];
     $filename = $_FILES['photo']['name'];
    $filedata = pathinfo($filename);
    $file_ext = strtolower($filedata['extension']);
    $allowed_ext = ["jpg","jpeg","png"];
  $filesize = $_FILES['photo']['size'];
     $allowedsize = 307200;
    $path ="photos/".$filename;
    $errors = [];

    if($filesize>$allowedsize){
        $errors[] = "Within 300 KB is allwed";
    }
    if(!in_array($file_ext, $allowed_ext)){
        $errors[] = "allowed file types jpg,png,jpeg";
    }
    if(count($errors)>0){
        foreach($errors as $err){
            echo $err ."<br>";
        }
    }else{
       $status= move_uploaded_file($temp,$path);
        if($status) echo "Successfully Uploaded";
    }


}

    

    
    ?>


    <form action="" method="post" enctype="multipart/form-data" name="">
        <input type="text" name="name" ><br><br>
        <input type="text" name="email" ><br><br>
        <input type="file" name="photo" ><br><br>
        
        <input type="submit" name="submit" value="Send">


    </form>
</body>
</html>




