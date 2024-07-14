<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Before sorting Countries name- </h1>
<?php
$countries = array(
    "Newzealand" => 'Walington',
    'Srilanka' => 'Colombo',
    'Uganda' => 'Kampala',
    'Australia' => 'Canberra',
    'Bangladesh' => 'Dhaka'
);

foreach ($countries as $country => $capital) {
    echo "$country ->$capital" . "<br>";
}

echo "<hr>";

// echo "<pre>";
//  print_r($countries);

ksort($countries);
echo "<h1>After sorting Countries name- </h1>";

foreach ($countries as $country => $capital) {
    echo "$country ->$capital" . "<br>";
}

?>

</body>
</html>