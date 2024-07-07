<?php
 $url = "sales@example.com";
 $withdot = strstr($url, ".");
 echo $withdot;
 echo "<br>";
$eithoutdot = ltrim($withdot, ".");
echo $eithoutdot;
 //echo ltrim(strstr($url, "@"),"@");
 ?>