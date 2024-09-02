<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "wdpf60";

$con = new mysqli($host,$user,$pass,$db);//@$con = @ for hide error on mysql; 

if($con->connect_errno){
ECHO "FAILED TO CONNECT TO MYSQL: ". $con->connect_error;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H2>THIS IS INDEX PAGE:</H2>

    <?php 
  $data = $con->query("SELECT * FROM products");

  $output = $data->fetch_assoc();
//   echo "<pre>";
//   print_r($output);

  foreach($output as $show){
    echo $show . "<br>";
  }
    
    ?>

</body>
</html>