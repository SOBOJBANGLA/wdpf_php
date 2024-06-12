<?php

printf("Bar inventory: %d bottles of tonic %s.", 100, "water");

echo "<br>";

printf("%d bottles of tonic water cost $%.3f",100, 43.2); // outputs $43.200

echo "<br>";

echo $cost = sprintf("$%.2f", 43.2); // $cost = $43.20

//echo $cost;

?>