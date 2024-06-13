<?php 
$x = 50;
//to convert data type is called casting;
$output = (float) $x;
echo gettype($output);
echo $output;

echo"<br>";

$y = " Rahim";
$onput = (string) $y;
echo gettype($onput);
echo  $onput;

echo"<br>";

$y = "Rahim";
$onput = (bool) $y;
echo gettype($onput);
echo  $onput;
?>

<?php 
echo"<br>";
$score = 1114;

$scoreboard = (array) $score;
echo "<pre>";
echo $scoreboard[0];
var_dump($scoreboard);
?>