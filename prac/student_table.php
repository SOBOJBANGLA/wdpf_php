<?php

$student =  array(
    "Nazrul" => 50,
    "Saif" => 60,
    "Abir" => 70,
    "Babul" => 55,
    "Jamil" => 40,

);

echo "<table border>";

echo "<tr><th>Name</th><th>Marks</th></tr>";

foreach($student as $name=>$mark){
    echo "<tr><th>$name</th><th>$mark</th></tr>";
}

echo "</table>";

$max = max($student);
$person = array_search($max,$student);

echo "$person get maximum number $max";


?>