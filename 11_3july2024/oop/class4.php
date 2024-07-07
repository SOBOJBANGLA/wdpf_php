<?php
class man{
    
   public $name ;
    public $age ;
    public $address;

    
     function __construct($name,$age){
        $this->name =$name;
        $this->age =$age;
    }
    protected function info(){
       
        return "Name:" .$this->name ." ," ."Age:".$this->age." ," ;

    }
}
class gender extends man{
    public $address;

    public function __construct($name,$age,$address) {
        $this->name =$name;
        $this->age =$age;
        $this->address = $address;   
    }
    public function msz(){
        //return "Thank you";
        //return $this->info();
        return $this->name."<br>".$this->age."<br>".$this->address;
    }
}

$obj = new gender("Sakin","50","Mirpur");
//echo $obj->info();
echo $obj->msz();



?>

