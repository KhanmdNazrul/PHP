<?php 
$states = array("Ohio", "Iowa", "Arizona", "Iowa", "Ohio");

echo "<pre>";
print_r($states);
$uniqueStates = array_unique($states);
echo "<pre>";
print_r($uniqueStates);
?>