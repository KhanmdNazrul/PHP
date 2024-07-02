<?php class Employee {
//public $name = "Rahim";
private $name;//setter() by this function we set the value on private method;
public $age;
public $address;
protected $wage;

public function setName($name){
    $this->name = $name;
}
public function setWage($wage){
    $this->wage = $wage;
}



public function info(){
    $full = "";
    $full.= "Name: " . $this->name . "<br>";
    $full.= "Age: ". $this->age . "<br>";
    $full.= "Address: ". $this->address . "<br>";
    $full.= "Wage: ".  $this->wage . "<br>";
    return $full;
}


}

class programmer extends Employee{
    public $wage = 10000;
    public function bonus($percent){
      return  $this->wage * $percent;
    }
}

$obj1 = new Employee;
//echo $obj1->name
 //$obj1->name = "Rahim";
 $obj1->setName("Rahim");
 $obj1->age= 35;
 $obj1->address="Khilgaon";
 $obj1->setWage(5000);
 echo $obj1->info();
//echo $obj1->name


echo "<br>";

$prog1 = new programmer;
echo "Salary: " . $prog1->wage ."<br>";
echo "Bonus: " . $prog1->bonus(".10");
?>