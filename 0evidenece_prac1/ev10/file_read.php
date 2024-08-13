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
        $student = $_POST['stid'];
        $obj = new Studen('result.txt');
        $obj->updat($student);

    }
    class Studen{
        public $datas;

        public function __construct($x){
            $this->datas = file($x);
        }

       public function updat($stid){
        foreach($this->datas as $data){
            $line = explode("|",$data);
            list($id,$name,$batch,$mark)= $line;
            if($id == $stid){
                echo "ID-$id<br>Name-$name<br>Batch-$batch<br> Mark-$mark<br>";
            }
        }
       }
        
    }
    
    ?>
    <form action="" method="post">
        <select name="stid" >
            <option value="">Select One</option>
            <option value="11">Saif</option>
            <option value="12">Sakib</option>
            <option value="13">Sami</option>
            <option value="14">Sajib</option>
        </select><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>