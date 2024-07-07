<?php
$states = array("Ohio", "New York", "California", "Texas");
$state = array_shift($states);

echo "<pre>";

print_r($states);
echo "<br>";
echo $state;
echo "<br>";

/*$states = array("Ohio", "New York");
array_unshift($states, "California", "Texas");
print_r($states);*/

?>