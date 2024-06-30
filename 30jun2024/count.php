<?php
$fruits = array("apple", "orange", "banana");

echo count($fruits);
echo "<br>";

$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"),"Miami",array("Dhaka","Rajshahi","Bhola","Feni",));
//echo count($locations);
echo count($locations,1);

echo "<br>";
echo sizeof($locations);

?>