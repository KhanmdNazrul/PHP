<?php 
$fruits = array("apple", "orange", "banana");
echo count($fruits); // it works to count array length.

$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"), 
"Miami");
echo "<br>";
echo count($locations, 1);
echo "<br>";
echo sizeof($locations);
?>