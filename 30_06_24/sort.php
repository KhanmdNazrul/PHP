<?php 
$grades = array(42, 98, 100, 100, 43, 12);
echo "<pre>";
print_r($grades);
sort($grades);
echo "<pre>";
print_r($grades);
echo "<hr>";

$fruits = array("banana", "apple", "orange", "mango");
sort($fruits);
echo "<pre>";
print_r($fruits);
rsort($fruits);
echo "<pre>";
print_r($fruits);

echo "<hr>";

$states = array("Delaware", "Pennsylvania", "New Jersey");
echo "<pre>";
print_r($states);
echo "<pre>";
print_r(array_reverse($states,1));
?>