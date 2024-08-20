<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
<h1>Ans no - 2</h1>
    <?php
    echo "<h1>Before Sorting</h1>";
    $students = array(
        'Saif'=>'Dhaka',
        'Nazrul'=>'Cumilla',
        'Babul'=>'Madaripur',
        'Abir'=>'Gazipur',
        'Tanim'=>'Bhola'

    );
    foreach($students as $name => $dist){
        echo "$name => $dist"."<br>";
    }
echo "<hr>";
    echo "<h1>After Sorting</h1>";
    ksort($students);

    foreach($students as $name => $dist){
        echo "$name => $dist"."<br>";
    }



    
    ?>
</body>
</html>