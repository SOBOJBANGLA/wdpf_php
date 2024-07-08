<?php
$drive1 = 'e:';
//printf("Remaining MB on %s: %.2f", $drive,
echo disk_free_space($drive1)/1024/1024/1024 ;

echo "<hr>";
$drive = 'f:';
echo disk_free_space($drive)/1024/1024/1024 ;
?>