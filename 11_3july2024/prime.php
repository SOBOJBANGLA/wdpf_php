<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    if(isset($_REQUEST['submit'])){
        function primeCheck($num){
            if($num==0){
                return ("0 is not input number");
            }
            else if($num==1){
                return ("1 is not prime Number");
            }
            else if($num==2){
                return ("2 is a prime Number");
            }
            else{
                for($i=2; $i<$num; $i++){
                    if($num %2==0){
                        return "$num is a not prime Number";
                    }
                }
                return "$num is a prime Number";
            }
        }
        $number= $_REQUEST['num'];
       echo primeCheck($number);
    }
    ?>
    <form action="" method="post">
<input type="text" name="num" placeholder="Enter Your Number">
<input type="submit" name="submit" value="CHECK">

    </form>   

</body>
</html>