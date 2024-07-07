<?php
/*class man{
    public $name;
    public $age;
    public $address;
    public function info(){

      return $this->name ='Dulal'."<br>".$this->age = "20".$this->address ="Mirpur";
    }

}

$obj = new man();
echo $obj->info();*/

class man{
    public $name;
    private $age;
    public $address;
    public function info(){

      return $this->age = "20";
    }

}

$obj = new man();
echo $obj->info();


?>