<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload_class</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $image = $_FILES['photo'];
        $obj = new File($image);
        $obj->doUpload();

    }

    class File{
        public $img;

        public function __construct($x){
            $this->img = $x;
        }
        public function doUpload(){
            $info =$this->img;
            $file_name = $info ['name'];
            $file_tmp = $info ['tmp_name'];
            $file_size =$info ['size'];
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
       
    }

    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" ><br>
        <input type="submit" value="upload" name="submit">
    </form>
</body>
</html>