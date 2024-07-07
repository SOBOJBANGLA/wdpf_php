<?php
$value1 = "Hello";
$value2 = &$value1; // $value1 and $value2 both equal "Hello"

$value2 = "Goodbye"; // $value1 and $value2 both equal "Goodbye"
 $value1 = "Today";

 echo $value2;

 echo "<br>";
?>

<?php
$value1 = "Hello";
$value2 = &$value1; // $value1 and $value2 both equal "Hello"
$value2 = "Goodbye"; // $value1 and $value2 both equal "Goodbye"

echo $value2;
?>