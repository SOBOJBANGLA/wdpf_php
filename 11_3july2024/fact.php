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
    $num = $_POST['num'];
    $fact =$num;
    for($i=1; $i<$num ;$i++){
        $fact = $fact *$i;
    }
    echo "{$num} factorial Number is: {$fact}";
}

?>
<form action="" method="post">
<input type="text" name="num" placeholder="Enter your Number">
<input type="submit" name="submit" value="CHECK">
</form>
</body>
</html>