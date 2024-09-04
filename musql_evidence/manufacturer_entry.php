<?php $db = new mysqli("localhost:3306","root","","evidence1") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Manufacturer Entry</h2>


    <?php 
    if(isset($_POST['add'])){
        extract($_POST);
        if($db->query("CALL add_manufacturer('$name','$address','$contact')")){
            echo "Successfully Added";
        }else{
            echo "Failed to Add";
        }
    }
    
    ?>

    <form action="" method="post">
    <input type="text" name="name" placeholder="Enter Company Name" id=""><br>
    <input type="text" name="address" placeholder="Enter Company Address" id=""><br>
    <input type="text" name="contact" placeholder="Enter Contact Number" id=""><br>
    <input type="submit" name="add" value="ADD" id="">


    </form>
</body>
</html>