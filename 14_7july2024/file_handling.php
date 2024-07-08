<?php
//read
// Open a text file for reading purposes
/*$fh = fopen('files/users.txt', 'r');
// While the end-of-file hasn't been reached, retrieve the next line
while (!feof($fh)) {
echo fgets($fh) . "<br>";
}
// Close the file
fclose($fh);*/
?>

<?php
//wrote
// Open a text file for reading purposes
/*$fh = fopen('files/users.txt', 'w');
fwrite($fh,"Hello everybody");
fclose($fh);
$fh = fopen('files/users.txt', 'r');
// While the end-of-file hasn't been reached, retrieve the next line
while (!feof($fh)) {
echo fgets($fh) . "<br>";
}
// Close the file
fclose($fh);*/
?>

<?php
//append
// Open a text file for reading purposes
/*$fh = fopen('files/users.txt', 'a');
fwrite($fh,"Hello everybody");
fclose($fh);
$fh = fopen('files/users.txt', 'r');
// While the end-of-file hasn't been reached, retrieve the next line
while (!feof($fh)) {
echo fgets($fh) . "<br>";
}
// Close the file
fclose($fh);*/
?>
<?php
//append
// Open a text file for reading purposes
$fh = fopen('files/users.txt', 'a');
fwrite($fh,"Hello everybody");
fclose($fh);
$fh = fopen('files/users.txt', 'r');
// While the end-of-file hasn't been reached, retrieve the next line
while (!feof($fh)) {
echo fgets($fh) . "<br>";
}
// Close the file
fclose($fh);
unlink('files/users.txt');

?>






