<?php
class man{
    /*public $name = 'Sani';
    public $age = 20;
    public $address='Dhaka';*/
    public $name ;
    public $age ;
    public $address;

    /*function info(){
        $this->name = "Abu";
        return $this->name  ;

    }*/
    function info($fname,$fage,$fadd){
        $this->name =$fname ;
        $this->age = $fage;
        $this->address =$fadd;
        return "Name:" .$this->name ."<br>" ."Age:".$this->age."<br>"."Address:".$this->address."<br>" ;

    }

}

$obj = new man();
/*echo $obj->name ."<br>";
echo $obj->age ."<br>";      //1
echo $obj->address."<br>";
echo $obj->info();*/

/*$obj->name ="Sani";
echo $obj->name;      //2
                                
$obj->name ="Saki";
echo $obj->name;*/

echo $obj->info('Samad',"45","Mirpur");

$obj1 = new man();
echo $obj1->info("Yousuf","51","Barishal");

$obj2 = new man();
echo $obj2->info("Sami Yousuf","41","London");

?>