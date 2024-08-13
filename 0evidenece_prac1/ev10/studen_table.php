<?php
$student = array(
    "Joy" => 60,
    "Saif" => 65,
    "Abir" => 45,
    "Noman" =>80,
    "Sakib" =>72
);

echo "<pre>";
print_r($student);

echo "<table border>";
echo "<tr><th>Name</th><th>Marks</th></tr>";

foreach($student as $name=>$mark){
    echo "<tr><th>$name</th><th>$mark</th></tr>";
}
echo "</table>";

$max = max($student);
$person = array_search($max,$student);
echo "$person get Maximum number$max";

 ?>