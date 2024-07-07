<?php

$division = [
    "Dhaka" => array(
        "Population" => "10k",
        "Spot"=> "Buriganga",
        "Food"=> "Singara"
    ),
    "Rajshahi" => array(
        "Population" => "20k",
        "Spot"=> "Padma",
        "Food"=> "Mango"
    ),
    "Khulna" => array(
        "Population" => "30k",
        "Spot"=> "Sundarban",
        "Food"=> "Honey"
    )
];

echo $division["Khulna"]["Food"];
echo "<br>";

print_r ($division["Dhaka"]["Food"]);
echo "<br>";
print_r ($division);
?>