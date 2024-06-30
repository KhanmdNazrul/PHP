<?php 
$fruits = array("apple", "orange", "banana");
$fruit = next($fruits); // returns "orange"
        // returns "banana"
echo next($fruits);
echo "<br>";
echo prev($fruits);
echo "<br>";
echo end($fruits);
echo "<br>";
echo reset($fruits);
echo "<br>";
echo current($fruits);
echo "<br>";
echo count($fruits)// it works to count array length.

?>