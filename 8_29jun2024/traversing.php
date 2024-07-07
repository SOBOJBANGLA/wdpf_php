<?php

$country = array(
    "Bangladesh" => "Dhaka",
    "Srilanka" => "Colombo",
    "Uganda" => "Kampal",
    "Nepal"=> "Kathmondo",
    "Maldives" => "Maley"
);

while ($item = key($country)){
    echo $item ."<br>";
    next($country);
}


?>