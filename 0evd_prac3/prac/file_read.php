<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $student = $_POST['stid'];
        $obj = new Student('result.txt');
        $obj->result($student);
    }

    class Student{
        public $datas;

        public function __construct($x){
            $this->datas = file($x);
        }

        public function result($st){
            foreach($this->datas as $data){
                $line = explode("|",$data);
                list($id,$name,$batch,$marks) = $line;
                if($id == $st){
                    echo "ID-$id<br>Name-$name<br>Batch-$batch<br> Marks-$marks";
                }
            }
        }


    }
    
    
    ?>

    <form action="" method="post">
        <select name="stid" >
            <option value="">Select one</option>
            <option value="11">Akib</option>
            <option value="12">Abir</option>
            <option value="13">Asif</option>
            <option value="14">Amir</option>
        </select><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>