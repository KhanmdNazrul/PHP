<?php 
 $states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Colorado", "Connecticut");
 echo "<pre>";
 print_r($states);
 echo "<hr>";
 //$subset = array_slice($states, 4);
// $subset = array_slice($states, 4, 2);
 $subset = array_slice($states, 1, -3);
 echo "<pre>";
 print_r($subset);
?>