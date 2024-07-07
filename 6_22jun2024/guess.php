<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  /*
  //if (isset($_POST['submit'])) {
  if($_SERVER['REQUEST_METHOD']=='POST') {
    $secretNumber =453;
    if ($_POST['guess'] == $secretNumber) {
        echo "Congratulations!";
        }else{
            echo "Try again";
        }
    
}*/

/*if($_SERVER['REQUEST_METHOD']=='POST') {
    $secretNumber =500;
    if ($_POST['guess'] == $secretNumber) {
        echo "Congratulations!";
        }else if(abs($secretNumber - $_POST['guess'])<20){
            echo "You are too close";
        } else{
            echo "Try again";
        }
    
}*/
if(isset($_POST['submit'])){
if($_SERVER['REQUEST_METHOD']=='POST'){
$sc=500;
if($_POST['guess']==$sc){
    echo "Congratulations";
}else if(abs($sc-$_POST['guess'])<20){
    echo "you are too close";
}else{
    echo "Try again";
}

}
}


?>



    <form action="" method="post">
        <input type="text" name="guess" >
        <input type="submit" name="submit" value="SEND">


    </form>
</body>
</html>