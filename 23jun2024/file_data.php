<?php

$data = file("users.txt");

/*echo "<pre>";
print_r($data);*/

echo "<table border='2'>";
echo "<tr><th>Name</th><th>Profession</th><th>Color</th></tr>";

foreach($data as $item) {
   // print $item ."<br>";


   $line =explode("|", $item);
   list($name,$prof,$color) = $line;
echo "<tr><td>$name</td><td>$prof</td><td>$color</td></tr>";
   //echo "<pre>";
   //print_r($line);


}
echo "</table>";



?>