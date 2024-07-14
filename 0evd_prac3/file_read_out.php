<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File-read</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $student = $_POST['stid'];
        $obj = new Student('result.txt');
        $obj-> result($student);
    }

    class Student{
        public $datas;

        public function __construct($x){
            $this->datas =file($x);
        }

        public function result($sti){
            foreach($this->datas as $data){
                $line = explode("|",$data );
                list($id,$name,$batch,$result)= $line;
                if($id == $sti){
                    echo "ID-$id<br>Name-$name<br>Batch-$batch<br>Result-$result";
                }
            }
        }

    }

      ?>

    <form action="" method="post">
        <select name="stid" >
            <option value="">Select one</option>
            <option value="1282731">Saif</option>
            <option value="1282735">Sami</option>
            <option value="1282740">Sakib</option>
            <option value="1282746">Jamil</option>
        </select><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>