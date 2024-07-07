<?php
/*class MyName{
    public $x;
    public $y;
    public $z;

    public function __construct($a,$b){
        $this->x = $a;
        $this->y = $b;
        
    }
    public function add(){
        $this->z =$this->x +$this->y;
        return $this->z;

    }

}
$obj =new MyName(200,500) ;

echo $obj->add()."<br>";

$obj1 =new MyName(300,400) ;

echo $obj1->add()."<br>";

$obj2 =new MyName(100,400) ;

echo $obj2->add()."<br>";*/


/*class Add{
    public $x;
    public $y;
    public $z;

    public function __construct($a,$b){
        $this-> x=$a;
        $this-> y=$b;
    }
    public function abc(){

        $this->z = $this-> x+$this-> y;
        return $this->z;
    }

}

$obj = new Add(800,500);
echo $obj->abc();*/

class Sum{
    public $a;
    public $b;
    public $c;
    public $d;
    public $e;

    public function __construct($m,$n,$o,$p,$q){
        $this->a =$m;
        $this->b =$n;
        $this->c =$o;
        $this->d =$p;
        $this->e =$q;
    }

    public function out(){
        $this->c =$this->a +$this->b+$this->c+$this->d+$this->e ;
        return $this->c;
       
    }

}

$obj = new Sum(10,20,10,40,20);

echo $obj->out();


?>