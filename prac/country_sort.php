<?php
echo "<h1>Before sorting</h1>";
$country = array(
    "Srilanka" => "Colombo",
    "Nepal" => "Kathmandu",
    "Bangladesh" => "Dhaka",
    "Australia" => "Canberra",
    "China" => "Beijing",
);

foreach($country as $name => $capital){
    echo "$name = $capital <br>";
}

echo "<hr>";
echo "<h1>After sorting</h1>";
ksort($country);

foreach($country as $name => $capital){
    echo "$name = $capital <br>";
}

?>