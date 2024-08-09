<?php
$students =array("Saif"=> 80,"Kamal"=> 65,"Salam"=> 62,"Abir"=> 60,"Mojib"=>52);
echo "<pre>";

print_r($students);

echo "<table border>";
echo "<tr><th>Student Name</th><th>Score</th></tr>";

foreach($students as $name =>$score){
    echo "<tr><td>$name</td><td>$score</td></tr>";
}
echo "</table>";

$max = max($students);
$person = array_search($max,$students);
echo "$person get maximum number $max ";
?>