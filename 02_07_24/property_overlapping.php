<?php
class Employee
{
    public $name;
    public function __set($propName, $propValue)
    {
        $this->$propName = $propValue;
    }
}

$emplo = new Employee;
echo $emplo->name = "Name: "."Mohiuddin Zoarder" . "<br>";

echo $emplo->phone = "Phone: "."01  9t bari agrabad";//set value by (__set()) function. magical method;
