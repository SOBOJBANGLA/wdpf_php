<?php
class Employee{

   //public $name="Rahim";
    public $name;
    public $age;
    public $address;
    public function info(){
        $full = "";
        $full .= "Name:" .$this->name ."<br>";
        $full .= "Age:" .$this->age ."<br>";
        $full .= "Address:" .$this->address ."<br>";

        return $full;

    }

}//End of class

$obj1=new Employee;

//echo $obj1->name;

$obj1->name="Rahi";

 $obj1->age =20;
 $obj1->address = "Mirpur";

 echo $obj1->info();

 




?>