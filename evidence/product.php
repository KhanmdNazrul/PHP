<?php $db = new mysqli("localhost:3306","root","","evidence") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>
<body>
    <h2>Ans: to the Q: no. 4</h2>

    <h4>Products List price above 5000 taka </h4>

    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>MANUFACTURER_ID</th>
        </tr>

        <?php $data= $db->query("SELECT * FROM product_list_5000");
        while($row = $data->fetch_assoc()){?>

        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td style="align:center"><?php echo $row['manufacturer_id'] ?></td>
        </tr>

       <?php }?>
        
        
    </table>
    
</body>
</html>