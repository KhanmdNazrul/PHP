<?php $db = new mysqli("localhost:3306","root","","evidence1") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Products List price above 5000 taka</h2>
    <table border="1" style="border-collapse: collapse;">
        <tr></tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
        </tr>
    <?php 
    $data = $db->query("SELECT * FROM `product_price_above_5000`");

    while($row = $data->fetch_assoc()){?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>

        </tr>
    <?php } ?>
    
        
    </table>

</body>
</html>