<?php
    if (isset($_POST['submit'])) {
         $name = $_POST['name'];
         $email = $_POST['email'];
         $pass = $_POST['pass'];
        echo "Name:$name <br> Email:$email <br> Password:$pass ";
    }


    ?>