<?php $db= new mysqli("localhost", "root", "", "wdpf60") ?>
<?php 

//require_once "dbconfig.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $sql = $db->query("SELECT*FROM products_price_above_5000");
    // $sql = $connection->query("SELECT*FROM products_price_above_5000");
    
    ?>

    <table border="1" style="border-collapse: collapse;">

    <tr>
<th>ID</th>
<th>NAME</th>
<th>PRICE</th>
<th>Manufacturer_ID</th>

    </tr>

    <?php while($row = $sql->fetch_assoc()){?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['price']?></td>
        <td><?php echo $row['manufacturer_id']?></td>
    </tr>
    <?php  } ?>
    </table>
</body>
</html>