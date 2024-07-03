<?php
class SimpleClass
{
    public $var = 'a default value <br>'; // public property declaration
    public const a="America"; // public constant Declaration
 
    // public method declaration
    public function displayVar() {
        echo $this->var;
    }
    public static function displayConst() {
      echo "Hello world <br>"; //self::a . "<br>";
    }
}

$obj1 = new simpleClass;
echo $obj1->var;
//echo "<br>";
echo$obj1::a;//  :: scope resulation;
echo "<br>";
$obj1->displayVar();
$obj1->displayConst();//const demands a new object to get output;

SimpleClass::displayConst();

?>