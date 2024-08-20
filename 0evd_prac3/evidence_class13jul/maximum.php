<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum number</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $numbers = $_POST['numbers'];
        $numArray = explode(",", $numbers);
        //print_r($numArray);
        $max = $numArray[0];
        $min = $numArray[0];
        for($i = 0 ; $i<count($numArray); $i++){
            if($numArray[$i]>$max){
                $max = $numArray[$i];
            }if($numArray[$i]<$min){
                $min = $numArray[$i];
            }

        }
echo "Among these numbers $numbers <br>";
echo "Maximum number: $max"."<br> Minimum number: $min";

    }
    
    ?>


    <form action="" method="post">
        <input type="text" name="numbers" >
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

