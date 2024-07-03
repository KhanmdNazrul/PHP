<?php
class oop{
private $name; 
private $age;
    public function __construct($names, $ages)
    {
        $this->name = $names;
        $this->age = $ages;
    }
    public function sayHello(){
        echo "Hello World ";
    }
    public function __destruct(){
        echo "<br>I'm about to disappear - bye bye!";
    }
}
$obj = new oop(" Mohiuddin ", 30);/* Now Automatically Execute __construct Method
                 And Will show "Welcome to PHP World " First.*/
echo "<pre>" ;
print_r($obj);

echo "<br>";
$obj->sayHello();

//$obj->sayHello(); // Result: Hello World
