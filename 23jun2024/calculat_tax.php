<?php
function calculateTax($price,$tax){
    $total =$price + $price*$tax;
    return $total;
}

echo calculateTax(10,0.5)

?>

<?php
/*function calculateTax($price,$tax=0){
    $total =$price + $price*$tax;
    return $total;
}

echo calculateTax(10)


?>*/