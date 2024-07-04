<?php 
$capitals = array("Bangladesh" => "Dhaka", "Srilanka"=>"Colombo", "Nepal"=>"Kathmondu", "Australia"=>"Canbera", "New Zealand"=>"Wellington");
echo"<pre>";
 print_r($capitals);

 echo "<hr>";
 //ksort($capitals);
 krsort($capitals);

 echo"<pre>";
 print_r($capitals);
?>