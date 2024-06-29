<?php 
$country = array("Banladesh"=>"Dhaka", "India"=>"New Delhi", "Sri Lanka"=>"Colombo", "Pakistan"=>"Islamabad", "Nepal"=>"Kathmondu");
while($item = key($country)){
    echo $item . "<br>";
    next($country);
}
?>