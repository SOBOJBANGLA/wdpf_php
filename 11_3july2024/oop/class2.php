<?php
class man{
    
    public $name ;
    public $age ;
    public $address;

    
    function __construct($name,$age){
        $this->name =$name;
        $this->age =$age;
    }
    /*function info(){
       
        return "Name:" .$this->name ."<br>" ."Age:".$this->age ;

    }*/

    function __destruct(){
        echo $this->name ."<br>".$this->age;
    }
}

$a = "Shakil";
$b = 20;
$obj = new man($a,$b);
//echo $obj->info();





?>

