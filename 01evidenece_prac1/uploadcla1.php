<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D</title>
</head>
<body>
    <?php
  if(isset($_POST['submit'])){
    $photo = $_FILES['photo'];
    $obj = new File($photo);
    echo $obj->doUpload();


  }

  class File{
    public $image;
    public $name;
    public $tmp;
    public $size;
    public $ext;

    public function __construct($file){
        $this->image = $file;
        $this->name = $this->image['name'];
        $this->tmp = $this->image['tmp_name'];
        $this->size = $this->image['size'];
        $filedata =pathinfo($this->name);
        $this->ext =strtolower($filedata['extension']);

    }

    public function doUpload(){
        $upload = "photo/".$this->name;
        $error =[];
        $allowed_size = 307200;
        $allowed_ext =["jpg","jpeg","png"];
        if($this->size>$allowed_size){
            $error[]="300 kb allowed";
        }
        if(!in_array($this->ext,$allowed_ext)){
            $error[]= "jpg,jpeg,png are allowed";
        }
        if(count($error)>0){
            foreach($error as $err){
                echo $err ."<br>";
            }
        }else{
            $status = move_uploaded_file($this->tmp,$upload);
            if($status)echo "upload successful";

        }


    }


  }

    
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        Pic : <input type="file" name="photo" ><br><br>
        <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>