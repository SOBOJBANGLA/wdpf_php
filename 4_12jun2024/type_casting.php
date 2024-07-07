<?php

$x =50;

$output = (float) $x ;

var_dump($output);

echo gettype($output);

echo "<br>";



$name = "Rahim";

$output = (float) $name;

echo $output;

echo "<br>";




$number = 50.45;

$output = (int) $number;

echo $output;

echo "<br>";




$name =(bool)"Rahim";

echo $name;

echo "<br>";


$score = 1114;
$scoreboard = (array) $score;
echo $scoreboard[0]; // Outputs 1114
echo "<br>";
var_dump($scoreboard);
echo "<br>";

$model = "Toyota";
$obj = (object) $model;
var_dump($obj);
echo "<br>";
print $obj->scalar; // returns "Toyota"

echo "<br>";

$total = 5; // an integer
$count = "15"; // a string
echo $total = $total+ $count; // $total = 20 (an integer)



?>