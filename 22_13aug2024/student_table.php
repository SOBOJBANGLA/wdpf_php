<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,th{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
$student = array(
    "Saif" => 60,
    "Mamun" =>45,
    "Babul" => 70,
    "Jamil" => 55,
    "Tanim" => 65

);
?>

<table >
<tr>
    <th>Name</th>
    <th>Mark</th>
</tr>
<?php 
foreach ($student as $name => $mark){ ?>
    <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $mark; ?></td>
    </tr>
   <?php  } ?>

   <tr>
<td colspan ="2">
<?php

$max = max($student);
$person = array_search( $max,$student);

echo "$person get Maximum number $max";

?>
</tr>
</td>
</table>

</body>
</html>