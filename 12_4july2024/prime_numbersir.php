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
//print_r($_POST);

$number = $_POST['num'];
echo primeCheck($number);

  }

  function primeCheck($num){
   if($num==1){
        return $num." 1 is not prime Number";
    }
    else if($num==2){
        return $num. " 2 is a prime Number";
    } else{
        for($i=2; $i<$num; $i++){
            if($num % $i ==0){
                return $num. " is a not prime Number";
            }
        }
        return $num. " is a prime Number";
    }
}

    ?>
    <form action="" method="post">
<input type="text" name="num" placeholder="Enter Your Number">
<input type="submit" name="submit" value="CHECK">

    </form>   

</body>
</html>