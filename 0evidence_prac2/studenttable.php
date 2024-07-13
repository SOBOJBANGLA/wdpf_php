<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenttab</title>
    <style>
        th,td{
            border: 2px solid black;
        }
    table{
        border-collapse: collapse ;
    }
    </style>
</head>
<body>
    
</body>
</html>

<?php
$student = array("Masud" =>55 , "Saif" =>60 ,"Abir" =>80 ,"Joy" =>70 ,"Noman" =>65 );

echo "<pre>";
print_r($student) ;

echo "<table border>";
echo "<tr><th>Name</th><th>Marks</th></tr>";

foreach($student as $name => $marks){
  echo  "<tr><td>$name</td><td>$marks</td></tr>";
}

echo "</table>";

$max = max($student);
$person = array_search($max,$student);

echo "$person get maximum number $max";



?>