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
        $img = $_FILES['photo'];
        $obj = new File($img);
        $obj->doUpload();
    }

    class File {
        public $file_info;

        public function __construct($x){
            $this->file_info = $x ;
        }

        public function doUpload(){
            $info =$this->file_info;
            $file_name = $info['name'];
            $file_tmp = $info['tmp_name'];
            $upload = "photo/".$file_name;

            $file_size = $info['size'];
            $allowed_size = 409600;

            $file_data = pathinfo($file_name);
            $file_ext = strtolower($file_data['extension']);

            $allowed_ext =['jpg','jpeg','png','pdf','docx'];
            $errors = [];

            if($file_size>$allowed_size){
                $errors[] = "Within 400kb allowed";
            }
            if(!in_array($file_ext,$allowed_ext)){
                $errors[] = "jpg,jpeg,png,pdf,txt are allowed";
            }

            if(count($errors)>0){
                foreach($errors as $err){
                    echo $err ."<br>";
                }
            }
            else{
                $status = move_uploaded_file($file_tmp,$upload);
                if($status) echo "Upload successful";
            }




        }





    }
    
    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" ><br>
        <input type="submit" value="Upload" name="submit">
    </form>
</body>
</html>