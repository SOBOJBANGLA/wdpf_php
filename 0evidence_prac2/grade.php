<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="grade" >
        <input type="submit" value="Check" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $grade = $_POST['grade'];
        echo gradeCheck($grade);
    }
    function gradeCheck($gd){
        if($gd == "A"){
            echo "Excellent";
        }else if($gd == "B"){
            echo "Good";
        }else if($gd == "C"){
            echo "Fair";
        }else if($gd == "D"){
            echo "Poor";
        }else {
            echo "Failure";
        }
    }

     ?>
</body>
</html>