<?php

$fruits = array("apple", "orange", "banana");
echo "<pre>";
print_r($fruits);
echo "<br><br>";
echo "Next:- " . next($fruits);
echo "<br><br>";
echo "Previous:- " . prev($fruits);
echo "<br><br>";
echo "End:- " . end($fruits);
echo "<br><br>";
echo "Reset:- " . reset($fruits);
echo "<br><br>";
echo "Current:- " . current($fruits);
echo "<br><br>";



?>