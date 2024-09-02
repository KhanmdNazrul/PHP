<?php 
$host = 'localhost:3306';
$user = 'root';
$pass ='';
$db = 'wdpf60';

$connection = new mysqli($host,$user,$pass,$db);

if($connection->connect_error){
ECHO "cONNECTION FAILED".$connection->connect_error;
exit();
}

?>