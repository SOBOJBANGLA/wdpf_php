<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <h1>Ans no-2</h1>
    <h4>Student Information</h4>
    <?php
    if(isset($_POST['submit'])){
        $student = $_POST['stid'];
        $obj =new Student('result.txt');
        $obj->show($student);
    }

    class Student{
        public $datas;

        public function __construct($x){
            $this->datas = file($x);
        }

        public function show($sti){
            foreach($this->datas as $data){
                $line = explode("|",$data);
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
            <option value="101">Saif</option>
            <option value="111">Jamil</option>
            <option value="121">Tanim</option>


        </select><br><br>
        <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>