<?php
$num = array(80, 65,62, 60,52);

$max = $num[0];

for($i = 1 ; $i<count($num); $i++){
    if($num[$i] >$max){
        $max = $num[$i];
    }
}
echo $max ;


?>