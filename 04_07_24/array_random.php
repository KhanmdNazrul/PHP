<?php 
 $states = array("Ohio" => "Columbus", "Iowa" => "Des Moines",
 "Arizona" => "Phoenix");
 echo "<pre>";
 print_r($states);
 $randomStates = array_rand($states, 2);
 print_r($randomStates);
?>