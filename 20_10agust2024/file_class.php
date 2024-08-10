<?php
class File {
    public $fileinfo;

    public function __construct($x){
        $this->fileinfo = $x;
        
    }
    public function upload(){
        $info=$this->fileinfo;
        $name = $info['name'];
        $tmpName = $info['tmp_name'];
        $data = pathinfo($name);
        $ext = strtolower($data['extension']);
        $allowed_types = ['jpg','png'];

        $filesize = $info['size'];
        $allowed_size = 512000; //500kb
        $error = [];

        if($filesize>$allowed_size){
            $error[]="File size must be within 500kb";
        }

        if(!in_array($ext,$allowed_types)){
            $error[]="File size must be jpg and png";
        }

        if(count($error)>0){
            foreach($error as $err){
                echo $err . "<br>";
            }
        }
            else{
                if (move_uploaded_file($tmpName, "uploads/".$name)){
                    echo "Upload successful";
                   }
            }


    
        }



        //move_uploaded_file($tmpName, "uploads/".$name);
    

}


?>