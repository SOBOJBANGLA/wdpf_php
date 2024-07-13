<?php
echo "<h3>Country name-</h3>";
$country = array ("Newzelend" => "Walington","Malidives" => "Male","Srilanka" => "Colombo","Bangldesh" => "Dhaka","Australia" => "Canberra");

echo "<pre>";

print_r($country);


 ksort($country);
echo "<pre>";

print_r($country);
echo "<table border>";
echo "<tr><th>Country</th><th>Capital</th></tr>";

foreach($country as $name => $capital){
    //echo "<pre>";

//print_r($name,$capital);
   echo  "<tr><td>$name</td><td>$capital</td></tr>";
}

echo "</table>";

?>