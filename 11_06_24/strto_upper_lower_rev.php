<?php 

$text = "Today I 'd be very busy";
echo strtoupper($text);
echo "<br>";
?>

<?php 
$text = "Today I 'd be very busy";
echo strtolower($text);
echo "<br>";
?>
<?php 
$text = "Today I 'd be very busy";
echo strrev($text);
echo "<br>";
?>

<?php 
$text = "A quick brown fox jumps over the lazy dog";
 echo $mohi = str_replace("fox", "Tiger", $text);
 //echo $mohi;

echo "<br>";
?>
<?php 
$x = " Rahim ";
$y = "is Running ";

$x = ltrim($x);//without trim or ltrim & rtrim = or same;
echo $x . $y;
?>