<?php 
$even = range(0,10,2);
echo "<pre>";
print_r($even)
?>
<?php  

$odd = range(1,11,2);
echo "<pre>";
print_r($odd);



echo "<hr>";
echo "<br>";

$letters = range("A", "E");
echo "<pre>";
print_r($letters);

echo "<hr>";
echo "<br>";
echo "Array";
$fruits = array("Mango", "Orange", "Banana", "Grape","Jackfruit");
foreach ($fruits as $eat){
    echo $eat . "<br>";
}
    echo "<hr>";
echo "<br>";

echo "Associative Array";
echo "<br>";
$students = array("Tanim"=>20, "Saif"=>30, "Abdullah"=>35);
foreach($students as $k=>$v){
    echo "$k : $v <br>"; 
}
echo "<hr>";
echo "<br>";




?>