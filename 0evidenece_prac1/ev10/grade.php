<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $grade = $_POST['grade'];
        $grade = strtoupper($grade);

        switch ($grade) {
            case "A":
                echo "Excellent";
                break;
            case "B":
                echo "Good";
                break;
            case "C":
                echo "Fair";
                break;
            case "D":
                echo "Poor";
                break;
            case "F":
                echo "Fail";
                break;
            default:
        }
    }

    ?>

    <form action="" method="post">
        <input type="text" name="grade"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>