<?php
$price = 10; 

$tax = 5; 

$total =50;

function calcSalesTax($price, $tax){

$total = $price + ($price * $tax);

echo $total;
}

//echo "Total cost: $total";

calcSalesTax($price, $tax);
?>