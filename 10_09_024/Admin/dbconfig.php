<?php 

$host = 'localhost:3306';
$user = 'root';
$pass ='';
$dbc = 'hospital';

$dbf = new mysqli($host,$user,$pass,$dbc);

if($dbf->connect_error){
echo "CONNECTION FAILED". $db->connect_error;
exit();
}

?>
