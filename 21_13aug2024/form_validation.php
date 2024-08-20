<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ragistration</h2>

    <?php 
    if(isset($_REQUEST['submit'])){
        $msg = form_validation();
        if($msg){
            echo "<ul>";
            foreach($msg as $m){
                echo "<li>$m</li>";
            }
            echo "</ul>";
    }else{
        echo "Validation ok";
    }

    }
    function form_validation(){
        $errors =[];

        $fullname=$_REQUEST['fullname'];
        
        $district=$_REQUEST['district'];
        $hobbies=$_REQUEST['hobbies'];
        $address=$_REQUEST['address'];

        if($fullname==""){
            $errors[] =  "You must enter fullname";
        }

       /* if(isset($_REQUEST['gender'])){
        $gender=$_REQUEST['gender'];
       
    }else {
        if(empty($gender)){
            $errors[] =  "You must select gender";
        }
    }*/
    if($district==""){
        $errors[] =  "You must enter district";
    }

    if($address==""){
        $errors[] =  "You must enter address";
    }

    if(empty($hobbies)){
        $errors[] =  "You must enter hobbies";
    }

        return $errors;
    }
    
    
    ?>
    <form action="" method="post">
        Name: <br>
        <input type="text" name="fullname" placeholder="Enter Your Name"><br>
        Gender :  <br>
        <input type="radio" name="gender" value="Male" checked>Male
        <input type="radio" name="gender" value="Female" >Female <br>
        District : <br>
        <select name="district" >
            
            <option value="">Select one</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Khulna">Khulna</option>
            <option value="Pabna">Pabna</option>
            <option value="Gopalganj">Gopalganj</option>
        </select><br>

        Hobbies: <br>
        <input type="checkbox" name="hobbies[]" value="cricket" checked>Cricket
        <input type="checkbox" name="hobbies[]" value="football">Football
        <input type="checkbox" name="hobbies[]" value="hockey">Hockey
        <input type="checkbox" name="hobbies[]" value="tenies">Tenies <br>

        Address: <br>
        <textarea name="address" placeholder="Enter address"></textarea><br>
        <input type="submit" value="REGISTER" name="submit">


    </form>
</body>
</html>