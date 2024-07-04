<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Factorial Test</h2>

    <?php  
   if(isset($_POST['submit'])){
   $num = $_POST['number'];
   echo Facto($num);
   }


   function Facto($num){
    $fact = 1;
    for($i = $num; $i>=1; $i--){
        $fact = $fact * $i;
    }
    return $fact;
   }
    ?>

    <form action="" method="post">
    <input type="text" name="number" placeholder="Enter Your Number" id=""> <br>
    <input type="submit" name="submit" value="Check" id="">


</form>
</body>
</html>