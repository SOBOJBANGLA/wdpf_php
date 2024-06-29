<?php
//Array

$fruits =array("Mango","Orange","Apple","Jackfruit");

foreach($fruits as $x){
    echo $x . "<br>";
}
echo "<hr>";
//Associative array
$students = array("Tanim" =>20, "Saif"=>19,"Abdullah"=>22);

foreach($students as $key => $value){
echo"$key : $value <br>";
//echo"{$key} : {$value}
}
echo "<hr>";

$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");
foreach ($customers as $customer) {
/*foreach($customer as $item){
    echo $item . " ";
}
echo "<br>";*/

list($name, $email, $number) = $customer;

echo "Name: {$name} Email: {$email} Number: {$number}";
echo "<hr>";
}




?>