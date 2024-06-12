<?php

//Numeric indexed array

$rivers = array("Padma" , "Meghna", "Jumauna" ,"Surma");

echo "<pre>";

print_r($rivers);
$rivers [7] = "Jumauna";
$rivers [2] = "Tista";
$rivers [11] = "Gomti";

print_r($rivers);

echo "<hr>";


//Associative array

//$capitals = ["Bangladesh" =>"Dhaka" , "Srilanka" =>"Colombo","Nepal" =>"Katmondu"];

$capitals = array("Bangladesh" =>"Dhaka" , "Srilanka" =>"Colombo","Nepal" =>"Katmondu");

$capitals["Bhutan"] = "Thimpu";
print_r($capitals);
?>