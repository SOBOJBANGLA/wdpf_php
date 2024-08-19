<?php
echo "<h2>Ans no-3</h2>";
$student = array(
    "Saif" => 60,
    "Rakib" => 70,
    "Abir" => 80,
    "Tanim" => 50,
    "Jamil" => 40,
);

echo "<table border>";
echo "<tr><th>Name</th><th>Marks</th></tr>";

foreach($student as $name=>$mark){
    echo "<tr><td>$name</td><td>$mark</td></tr>";
}

echo "</table>";

$max = max($student);
$person = array_search($max,$student);
echo "$person get maximum number $max";


 ?>