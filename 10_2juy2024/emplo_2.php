<?php
class Employee{

   //public $name="Rahim";
    private $name;
    public $age;
    public $address;

    protected $wage;

    public function setName($name){
        $this->name = $name;
    }

    public function setwage($wage) {
        $this->wage = $wage;
    }
    public function info(){
        $full = "";
        $full .= "Name:" .$this->name ."<br>";
        $full .= "Age:" .$this->age ."<br>";
        $full .= "Address:" .$this->address ."<br>";
        $full .= "Salary:" .$this->wage ."<br>";

        return $full;

    }

}//End of class

class Programmer extends Employee {
    public $wage =10000;
    public function bonus($percent){
        return $this ->wage * $percent;
    }
}

$obj1=new Employee;

//echo $obj1->name;

//$obj1->name="Rahi";
$obj1->setName("Rahi");
$obj1->setwage(5000);

 $obj1->age =20;
 $obj1->address = "Mirpur";

 echo $obj1->info();

 echo "<hr>";

 $Prog1 =new Programmer;
 echo "Salary: ". $Prog1->wage."<br>";
 echo "Bonus: ". $Prog1->bonus(".10");
 

?>