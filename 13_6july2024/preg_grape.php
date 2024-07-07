<?php
$foods = array("pasta", "steak", "fish", "potatoes","pizza","kabab","laddu");
$food = preg_grep("/u$/", $foods);
print_r($food);
?>