<?php
$fruits = ["Mango", "Banana", "Lichi","Jackfruits"];
list($var1,$var2,$var3,$var4) = $fruits;

echo $var2 ."<hr>";


?>

<?php
function retrieveUserProfile(){
$user[] = "Jason Gilmore";
$user[] = "jason@example.com";
$user[] = "English";
return $user;
}
list($name, $email, $language) = retrieveUserProfile();
echo "Name: {$name},<br> email: {$email},<br> language: {$language}<hr>";
?>



<?php
function userProfile(){
    
$user = ["Jason Gilmore","jason@example.com","English"];

return $user;
}
list($name, $email, $language) = userProfile();
echo "Name: {$name},<br> email: {$email},<br> language: {$language}";
?>