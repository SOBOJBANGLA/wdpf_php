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
        $stid =$_POST['stid'];
        echo student($stid);
    }

        function student($stid){
            $datas = file('result.txt');
            foreach($datas as $data){
                $line = explode("|",$data);
                list($id,$name,$age,$result) =$line;
                if($id ==$stid){
                    echo "ID- $id<br> Name-$name<br> Age- $age<br> Result- $result";
                }
    
            }
        }
        
    ?>

    <form action="" method="post">
        <select name="stid" >
            <option value="">Select one</option>
            <option value="1">Saif</option>
            <option value="2">Mohiuddin</option>
            <option value="3">Abir</option>

        </select><br><br>
        <input type="submit" value="Submit" name="submit">

    </form>
</body>
</html>