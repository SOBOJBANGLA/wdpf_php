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
       echo primCheck($number);
    }

    function primCheck($num){
        if($num == 1){
            return $num . " is not prime number";
        }else if($num == 2){
            return $num . " is prime number";
        }else if($num == 0){
            return $num . " is not allowed";
        }else{
            for($i =2; $i < $num; $i++){
                if($num % $i == 0){
                    return $num . " is not prime number";
        }
    }return $num . " is prime number";
}
    }
    
    ?>

    <form action="" method="post">
        <input type="number" name="num" ><br>
        <input type="submit" value="Check" name="submit">
    </form>
</body>
</html>