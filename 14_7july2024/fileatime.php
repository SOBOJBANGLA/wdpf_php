<?php
$file = 'files/users.txt';
/*printf("File last accessed: %s", date("m-d-y g:i:sa",
fileatime($file)));*/

echo "Last Created Time:". date("m-d-y g:i:sa", filectime($file)) ."<br>";
echo "Last Modified Time:". date("m-d-y g:i:sa", filemtime($file))."<br>";

echo "Last Access Time:". date("m-d-y g:i:sa", fileatime($file));
?>