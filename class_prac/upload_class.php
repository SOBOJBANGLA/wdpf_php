<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h2>Ans no-1</h2>
    <?php
    if(isset($_POST['submit'])){
        $image = $_FILES['photo'];
        $obj = new File($image);
        $obj->doUpload();
    }

    class File{
        public $img ;

        public function __construct($x){
            $this->img = $x;
        }

        public function doUpload(){
            $info = $this->img;
            $file_name = $info['name'];
            $file_tmp = $info['tmp_name'];
            $upload = "photo/".$file_name;
            $file_size = $info['size'];
            $allowed_size = 409600;
           // $im = '<img src="photo\".$file_name width="120px" height="120px">';

            $file_data = pathinfo($file_name);
            $file_ext = strtolower($file_data['extension']);
            $allowed_ext = ['jpg','jpeg','png','pdf','docx'];
            $error = [];

            if($file_size>$allowed_size){
                $error[] = 'Within 400 kb are allowed';
            }
            if(!in_array($file_ext,$allowed_ext)){
                $error[] = "jpg,jpeg,png,pdf,docx are allowed";
            }

            if(count($error)>0){
                foreach($error as $err){
                    echo $err."<br>";
                }
            }

            else{
                $status= move_uploaded_file($file_tmp,$upload);
                if($status) echo "Upload successful";
            }

        }
    }
    
    ?>


    <form action="" method="post" enctype="multipart/form-data">
        Upload image : <input type="file" name="photo" ><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
