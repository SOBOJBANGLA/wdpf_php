<?php
define('DB_SERVER','localhost:3310');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'wdpf60_hospital');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>