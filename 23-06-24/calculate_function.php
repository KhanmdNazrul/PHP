<?php 

function calCulateTax($price, $tax){
$total = $price + $price * $tax;
return $total;
}
echo calCulateTax(10,2);//when you take a parameter on function , you have to give value of this parameter rather must get error.
?>