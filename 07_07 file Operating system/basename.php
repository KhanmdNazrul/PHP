<?php 
$path = 'files/user.txt';
echo basename($path);
echo "<br>";
echo dirname($path);
echo basename($path, ".txt");
?>