<?php

printf("Bar inventory: %d bottles of tonic %s.", 200, "orange");

echo "<br>";

printf("%d bottles of tonic water cost $%.4f",100, 43.2); // outputs $43.200

echo "<br>";

echo $cost = sprintf("$%.4f", 45.2); // $cost = $43.20

//echo $cost;

?>