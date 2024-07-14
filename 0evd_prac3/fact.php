<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $number = $_POST['num'];
        echo factCheck($number);
    }

    function factCheck($num){
        $fact = 1; 
        for($i=$num ; $i>=1;$i--){
            $fact = $fact * $i;
        }echo "$num factorial is $fact";
    }
    
    ?>

    <form action="" method="post">
        <input type="number" name="num" >
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>