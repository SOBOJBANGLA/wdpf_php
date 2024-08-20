<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>country</title>
</head>
<body>
    <h1>Country and Capital where country wise sorting</h1>

    <?php
    $countries = [
        "Srilanka"=>"Colombo",
        "Bangladesh"=>"Dhaka",
        "Uganda"=>"Kampala",
        "China"=>"Beijing",
        "Hungary"=> "Budapest",
        "Japan" =>"Tokyo",

    ];
    foreach($countries as $country=>$capital){
        echo "$country -> $capital <br>";
    }
echo"<hr>";

    ksort($countries);

    foreach($countries as $country=>$capital){
        echo "$country -> $capital <br>";
    }

    
    ?>
</body>
</html>