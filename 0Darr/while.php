<?php
 /* $i =1;

while($i<=20){
    if($i % 2 != 0){
    echo $i."<br>";
    $i++;
} } */

 /* $i = 1;
do{
    echo $i."<br>";
    $i++;
}while($i<=25);  */

$city = ["Dhaka","Cumilla","Bhola"];

echo "<ul>";

foreach($city as $ct){
    echo "<pre>";
    echo "<li>$ct</li>";
}
echo "</ul>";


?>