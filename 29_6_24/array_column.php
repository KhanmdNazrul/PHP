<?php 
$simpsons = [
    ['name' => 'Homer Simpson', 'gender' => 'Male'],
   //Chapter 5 Arrays 128
    ['name' => 'Marge Simpson', 'gender' => 'Female'],
    ['name' => 'Bart Simpson', 'gender' => 'Male']
   ];
   $names = array_column($simpsons, 'name');
   print_r($names);
?>