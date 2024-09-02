<?php 

$host = 'localhost:3306';
$user = 'root';
$pass ='';
$dbc = 'evidence';

$db = new mysqli($host,$user,$pass,$dbc);

if($db->connect_error){
echo "CONNECTION FAILED". $db->connect_error;
exit();
}

?>
