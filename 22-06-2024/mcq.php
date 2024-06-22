<?php
//date_default_timezone_set('Asia/Dhaka');
ini_set("date.timezone", "Asia/Dhaka");
echo date("l F Y  H:i:s");
?>

<?php
$capitals = array("Dhaka"=>100, "New Delhi"=>200);
echo "The capital of Ohio is {$capitals['Dhaka']}.";//use curly brace or concat sign to define the variable;
?>