<?php
$e = 'e:';
//printf("Remaining MB on %s: %.2f", $drive,
$free= disk_free_space($e) ;
$total =disk_total_space($e) ;

$used =$total-$free;
echo $used/1024/1024/1024;
?>