<?php $mysqli= new mysqli("localhost:3306", "root", "", "evidence_practices") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>All Products (price above 5000)</h3>


    <?php 
    $data = $mysqli->query("SELECT *  FROM product_price_above_5000");
    
    ?>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>

        <?php 
        while($data->fetch_assoc()){?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>
        </tr>

       <?php } ?>
    </table>
</body>
</html>