<?php 
 $states = array("Alabama", "Alaska", "Arizona", "Arkansas",
 "California", "Connecticut");
 echo "<pre>";
 print_r($states);

 echo "<hr>";

 $subset= array_splice($states,2,-1,array("New York", "Florida"));
 echo "<pre>";
 print_r($states);
 ?>