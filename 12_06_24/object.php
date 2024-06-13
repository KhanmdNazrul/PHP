<?php 
class Student {
    public $name;

    public $clss;
    function form($name, $class) {
        $this->name = $name;
        $this->clss = $class;
    }
}

$student1 = new Student;

$student1->form("Nazrul", 19);

var_dump($student1);
?>

