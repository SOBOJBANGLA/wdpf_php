<?php
class Student {
    public $name;

    public $age;

    
    function register($name, $age) {
        $this->name = $name;
        $this->age = $age;
}
}

$student1 = new Student;


$student1->register("Masud", 20);

var_dump($student1);

?>