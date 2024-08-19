<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $grade = $_POST['grade'];
        $grade = strtoupper($grade);

        if($grade == "A"){
            echo "Excellent";
        }else if($grade == "B"){
            echo "Good";
        }else if($grade == "C"){
            echo "Fair";
        }else if($grade == "D"){
            echo "Poor";
        }else{
            echo "Fail";
        }
    }
    
    
    ?>

    <form action="" method="post">
        <input type="text" name="grade" ><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>