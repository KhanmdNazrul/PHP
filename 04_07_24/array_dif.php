<?php 
 $array1 = array("OH", "CA", "NY", "HI", "CT");
 $array2 = array("OH", "CA", "HI", "NY", "IA");
 $array3 = array("TX", "MD", "NE", "OH", "HI");

 $diff = array_diff($array1, $array2, $array3);//first ($array1) parameter is the base of diff check;

 print_r($diff);
?>