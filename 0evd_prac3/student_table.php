<?php
$students = array(
    "Abir" =>65,
    "Joy" =>75,
    "Noman" =>55,
    "Saif" =>85,
    "Rony" =>50

);

echo "<pre>";
print_r($students);

echo "<table border>";
echo "<tr><th>Student name</th><th>Marks</th></tr>";

foreach($students as $name=>$marks){
    echo "<tr><td> $name</td><td>$marks</td></tr>";
}

echo "</table>";

$max = max($students);
$person = array_search($max,$students);
echo "$person get largest number $max";

?>