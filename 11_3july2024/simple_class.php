<?php
class SimpleClass
{
    public $var = 'a default value'; // public property declaration
   public const a="America"; // private constant Declaration
 
    // public method declaration
    public function displayVar() {
        echo $this->var;
    }
    public static function displayConst() {
        echo self::a;
    }
}

$obj1= new SimpleClass;
echo $obj1->var;
echo "<br>";

echo $obj1::a; //(::)scope resulation
echo "<br>";
$obj1->displayVar();
echo "<br>";
$obj1->displayConst();
echo "<br>";
SimpleClass::displayConst(); //static

?>