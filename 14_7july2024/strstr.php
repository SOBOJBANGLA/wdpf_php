<?php
$url = "sales@example.com";
//echo strstr($url, "@");
$withdot =strstr($url,".");
$withoutdot =ltrim($withdot,".");

echo $withoutdot;
?>