<?php
 $foods = array("pasta", "steak", "fish", "potatoes");
 //$food = preg_grep("/^s/", $foods); //searching from beginning;

 $food = preg_grep("/h$/", $foods);//searching from ending charAT within the word;

 print_r($food);
 ?>