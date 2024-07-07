

<h4>Get method</h4>
<a href ="get_post.php? name=Masud&email=asm@gmail.com&address=Mirpur">click here</a><br>




<?php
/*echo"<pre>";
//print_r($_GET);
//print_r($_POST);

echo"</pre>";

echo $_POST["email"];
echo "<br>";
echo $_POST["pswd"];*/

/*if(isset($_POST["subscribe"])){
    echo $_POST["email"];
    echo "<br>";
    echo $_POST["pswd"];

}*/

if(isset($_REQUEST["subscribe"])){
    echo $_REQUEST["email"];
    echo "<br>";
    echo $_REQUEST["pswd"];

}


?>


<h4>post method</h4>

<form action="" method="post">

Email address:<br>
<input type="text" name="email"  value="" /><br>


Password:<br>
<input type="password" name="pswd"  value="" /><br>


<input type="submit" name="subscribe" value="subscribe!" />

</form>