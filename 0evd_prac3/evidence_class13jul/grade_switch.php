<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading system</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $grade = $_POST['grade'];
        $grade = strtoupper($grade);

        switch($grade){
            case "A":
            echo "Excellent";
            break;
            case "B":
            echo "Good";
            break;
            default:
            echo "Fail";
            

        }
    }

    
    ?>

    <form action="" method="post">
        <input type="text" name="grade" placeholder="Enter grade letter"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

