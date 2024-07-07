<?php

$date = "22 June 2024";

$text = "Today is first class after Eid";

$web = "http://www.yahoo.com";

$output=<<<ABC
<h1>Text:$text</h1>
<p>$date</p>
<a href="$web">Click Here</a>

ABC;

echo $output;

?>