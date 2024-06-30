<?php

$grades = array(42, 98, 100, 100, 43, 12);


echo "<pre>";
print_r($grades);

rsort($grades);
print_r($grades);

$fruits = array("apple", "orange", "banana","mango");
rsort($fruits);
print_r($fruits);
?>