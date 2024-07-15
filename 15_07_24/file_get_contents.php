<?php  

echo file_get_contents("names.txt");// output directly text;

echo "<hr>";

$feel = file('names.txt');//outcome likes array;
foreach($feel as $think){
    echo $think;
}
?>