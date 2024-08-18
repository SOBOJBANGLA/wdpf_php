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
        $number_array = explode(',', $number);

        $max =$number_array[0];
        $min =$number_array[0];

        for($i=1;$i<count($number_array);$i++){
            if($number_array[$i]>$max){
                $max =$number_array[$i];
            }
        }
        echo "Maximum number=$max"."<br>";

        for($i=1;$i<count($number_array);$i++){
            if($number_array[$i]<$min){
                $min =$number_array[$i];
            }
        }
        echo "Minimum number=$min";

    }
    
    
    ?>

    <form action="" method="post">
        <input type="text" name="num" ><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>