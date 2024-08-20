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
        $st = new Student('result.txt');
        $st->result($student);
    }

    class Student{
        public $datas ;

        public function __construct($x){
            $this->datas = file($x);

    }
    public function result($sti){
        foreach($this->datas as $data){
            $line = explode("|",$data);
            list($id,$name,$batch,$result)=$line;
            if($id == $sti){
                echo "ID-$id<br> Name-$name<br> $batch,$result";
            }



        }


    }

}
    
    ?>


    <form action="" method="post">
        <select name="stid" >
            <option value="">Select one</option>
            <option value="12827">Saif</option>
            <option value="12828">Sakib</option>
            <option value="12829">Sami</option>
            <option value="12837">Saim</option>

        </select><br>
        <input type="submit" value="submit" name="submit">


    </form>
</body>
</html>