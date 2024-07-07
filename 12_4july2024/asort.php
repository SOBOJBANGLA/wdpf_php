<?php
$states = array("Dhaka", "Khulna", "Rajshahi", "Cumilla","Sylhet","Bramhambaria");
echo "<pre>";
 print_r($states);
asort($states);

echo "<hr>";
print_r($states);

arsort($states);
echo "<hr>";
print_r($states);


?>