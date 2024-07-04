<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Prime Number Check with PHP</h2>

    <?php 
    if(isset($_REQUEST['submit'])){
      $num = $_REQUEST['number'];
      echo primeCheck($num);
    }

    function primeCheck($num){
        if( $num == 0){
            return $num . "ENTER a Valid Number";
        }else if($num==1){
            return $num . "Not A Prime Number Number";
        }else if($num==2){
            return $num . " Is A Prime Number Number";
        }else{
            for($i = 2; $i<$num; $i++){
                if($num % $i == 0){
                  return  $num . " Is not a Prime Number";
                }
            }
            return $num . " Is a Prime Number";
        }
        
    }

    
    ?>

    <form action="" method="get">

    <input type="text" name="number" placeholder="Enter number to check" id=""> <br>
    <input type="submit" name="submit" value="Check" id="">
    </form>

   
</body>
</html>