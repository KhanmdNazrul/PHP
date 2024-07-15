

<?php 
session_start();

if(!isset($_SESSION['email'])){ 
header("Location:session_log.php");// to prohibit without matching entry on a page after session out;
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
    <h2>This is Home page</h2>
    <br>

    <a href="logout.php">Logout</a>

</body>
</html>