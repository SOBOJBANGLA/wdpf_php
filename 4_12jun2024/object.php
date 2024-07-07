<?php
class Student {
    public $name;

    public $age;

    
    function register($nam, $ag) {
        $this->name = $nam;
        $this->age = $ag;
}
}

$student1 = new Student;


$student1->register("Masud", 20);

var_dump($student1);

?>