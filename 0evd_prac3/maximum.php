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
        $number= $_POST['number'];
        $numberarray =explode(",",$number);

        $max =$numberarray[0];
        $min =$numberarray[0];

        for($i = 1 ; $i<count($numberarray); $i++){
            if($numberarray[$i]>$max){
                $max =$numberarray[$i];
            }
        }
        echo "Numbers =$number"."<br>";
        echo "Maximum number- $max"."<br>";

        for($i = 1 ; $i<count($numberarray); $i++){
            if($numberarray[$i]<$min){
                $min =$numberarray[$i];
            }
        }
        echo "Minimum number- $min";
    }
    ?>

    <form action="" method="post">
        <input type="text" name="number" ><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>