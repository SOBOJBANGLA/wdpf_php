<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student</title>
</head>
<body>
    <?php
    if(isset($_REQUEST['submit'])){
        $stid = $_REQUEST['stid'];
        $datas = file('result.txt');

    

    foreach($datas as $data){
        $line = explode("|",$data);
        list($id,$name,$mark,$result)=$line;
        if($id == $stid){
            echo "Id:-$id <br> Name:-$name <br> Mark: $mark <br> Result: $result" ;
        }

    }
    }
    
    ?>

    <form action="" method="post">
        <select name="stid" >
            <option value="">Select one</option>
            <option value="1">Saif</option>
            <option value="2">Jamil</option>
            <option value="3">Joy</option>

        </select><br><br>
    <input type="submit" value="CHECK" name="submit">
    </form>
</body>
</html>