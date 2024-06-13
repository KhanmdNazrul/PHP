<?php 
$p = "A123B"; // add operation with string number; 
//$p = "123";
$s = "456";

echo $p + $s . "<br>";
echo $p . $s;
echo "<br>";
?>

<?php 
ini_set("display_errors", 0);// displaying error off for current page;
ini_set("max_execution_time", 180);
//$p = "A123B"; add operation with string number; 
$p = "123";
$s = "456";

echo $p + $s . "<br>";
echo $p . $s;
?>