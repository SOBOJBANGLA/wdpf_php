<?php
class oop{
    private $name;
    private $age;
 public function __construct($name,$age){
     $this->name = $name;
     $this->age = $age;
 }
 public function sayHello(){
     echo "Hello" . $this->name .$this->age;
 }
 public function __destruct(){
    echo "<br>I'm about to disappear - bye bye!";
}
  
}
$obj=new oop("Masud",30); 
//print_r($obj);
//echo "<br>";
$obj->sayHello();



//echo "<br>";
 
//$obj->sayHello(); // Result: Hello World}
 
?>