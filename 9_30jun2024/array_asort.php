<?php

$grades = array(42, 98, 100, 100, 43, 12);


echo "<pre>";
print_r($grades);

asort($grades);
print_r($grades);

$fruits = array("apple", "orange", "banana","mango");
asort($fruits);
print_r($fruits);
?>