<?php 

class Employee {
//public $name = "Rahim";
public $name;
public $age;
public $address;

public function info(){
    $full = "";
    $full.= "Name: " . $this->name . "<br>";
    $full.= "Age: ". $this->age . "<br>";
    $full.= "Address: ". $this->address;
    return $full;
}


}

$obj1 = new Employee;
//echo $obj1->name
 $obj1->name = "Rahim";
 $obj1->age= 35;
 $obj1->address="Khilgaon";
 echo $obj1->info();
//echo $obj1->name
?>