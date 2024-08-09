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
        $number = $_POST['num'];
        echo grade($number);
    }

    function grade($num){
        if($num >=80){
            echo "A+";
        }else if($num >=70){
            echo "A";
        }else if($num >=60){
            echo "B";
        }else{
            echo "Fail";
        }
    }
    ?>
    
<form action="" method="post">
    <input type="number" name="num" >
    <input type="submit" value="submit" name="submit">

</form>
</body>
</html>