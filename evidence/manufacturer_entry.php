<?php $db = new mysqli("localhost:3306", "root", "", "evidence") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product entry</title>
</head>
<body>
    <h2>ANS. to the Q. No. 02</h2>

    <h4>Manufacturer Entry</h4>

    <?php 
    
    if(isset($_POST['add'])){
        extract($_POST);

        $data = "CALL add_manufacturer('$name','$address','$contact')";

        $insert = mysqli_query($db,$data);

        if($insert){
            echo "<b>Data Inserted</b>";
        }else{
            echo "<b>Data not Inserted</b>";
        }

    }
        ?>

    <form action="" method="post">

    <input type="text" name="name" placeholder="Enter Company Name" id=""><br>
    <input type="text" name="address" placeholder="Enter Company Address" id=""><br>
    <input type="text" name="contact" placeholder="Enter Company Number" id=""><br>
    <input type="submit" name="add" value="ADD" id="">
    </form>


    <?php include "manufacturer.php" ?>
</body>
</html>