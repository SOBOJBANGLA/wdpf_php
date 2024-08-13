<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Before Country sort</h2>
<?php 
$country = [
    "Srilanka" => "Colombo",
    "India" => "New Dilly",
    "Afganistan"=> "Kabul",
    "Bangladesh"=> "Dhaka",
    "Nepal" => "Kathmandu"
];

foreach($country as $name=>$capital){
    echo "$name->$capital". "<br>";
}
echo "<hr>";
echo "<h2>After Country sort</h2>";

ksort($country);
foreach($country as $name=>$capital){
    echo "$name->$capital". "<br>";
}

?>
</body>
</html>