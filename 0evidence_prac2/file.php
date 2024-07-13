<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $student = $_POST['stid'];
        $sti = new Student('result.txt');
       echo $sti-> stude($student);

    }

    class Student{
        public $datas;

        public function __construct($x){
            $this->datas = file($x);
        }

        public function stude($stid){
            foreach($this->datas as $data){
                $line = explode("|" ,$data);
                list($id,$name,$batch,$result)=$line;

                if($id ==$stid ){
                    echo "ID-$id <br> Name-$name <br> Batch-$batch <br> Result-$result";
                }
            }

        }
    }

     ?>

    <form action="" method="post">
        <select name="stid" >
            <option value="">Select one</option>
            <option value="1282731">Abdullah</option>
            <option value="1282732">Tanim</option>
            <option value="1282733">Joy</option>
            <option value="1282734">Abir</option>

        </select><br><br>
        <input type="submit" value="submit" name="submit">

    </form>
</body>
</html>