<?php $db = new mysqli("localhost:3306","root","","evidence"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
</head>
<body>
    <h3>Ans No-3</h3>
    <h3>Manufacturer List</h3>
    
    <?php 
    if(isset($_POST['delete'])){
        $mid = $_POST['company'];
        $sql = "DELETE FROM manufacturer WHERE id = '$mid'";
        $delete = mysqli_query($db,$sql);

        if($delete){
            echo "<h3 style= 'color:green'>Successfully Delete</h3>";
            
        }else{
            echo "<h3 style= 'color:red'>Not Deleted</h3>";
        }
    }
    
    ?>
    <form action="" method="post">
        <select name="company">
            <option value="">Select One</option>
            <?php 
           $sql = $db->query("SELECT * FROM manufacturer");
            while($row = $sql->fetch_assoc()){  ?>

        <option><?php echo $row['id'] ?> <?php echo $row['name'] ?></option>
        <?php } ?>
        
        </select>
        <input type="submit" name="delete" value="Delete">

    </form><br>
    <?php include "product.php" ?>
</body>
</html>