<?php $db = new mysqli("localhost:3306","root","","evidence1") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Delete Product by By manufacturer end</h2>


<?php 
if(isset($_POST['delete'])){
    $cmp = $_POST['company'];
    $trgr = "DELETE FROM manufacturer WHERE id = '$cmp'";
    $delete = mysqli_query($db,$trgr);

    if($delete){
        echo "Successfully Deleted";
    }else{
        echo "Failed to Delete";
    }

}
?>
    

    <form action="" method="post">

<select name="company" id="">
    <option value="">Select One</option>

<?php 
$data = $db->query("SELECT * FROM manufacturer");

while($row = $data->fetch_assoc()){?>
<option><?php echo $row['id']?>  <?php echo $row['name']?></option>
<?php } ?>
</select>

<input type="submit" name="delete" value="Delete" id="">

    </form>
</body>
</html>

   <?php include "product_view.php"; ?>


   <?php include "manufacturer.php"; ?>
</body>
</html>