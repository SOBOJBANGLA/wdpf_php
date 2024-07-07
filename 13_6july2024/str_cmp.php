<?php
$password = "abcdE";
$password1 = "abcde";

if(strcmp($password, $password1)==0){
    echo " Matched";
}else{
    echo "Not Matched";
}

echo "<hr>";
if(strcasecmp($password, $password1)==0){
    echo " Matched";
}else{
    echo "Not Matched";
}

?>