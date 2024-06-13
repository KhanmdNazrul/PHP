<?php 

//numeric index array;
$fruits = ["Mango", "Banana", "Orange", "Water Melon"];
echo "<pre>";
print_r($fruits);
$fruits[9]="Apple";
$fruits[15]="Guava";
print_r($fruits);
//Associative array;

$rivers = array("Padma", "Meghna", "Yamuna", "Kaputakkha");
$rivers["Padma"] = "Tista";
$rivers["Meghna"]= "Gumoti";
echo "<pre>";
print_r($rivers);

//Associative array;
$capitals = array("Bangladesh"=>"Dhaka", "Srilanka"=>"colombo", "India"=>"New Delhi");
echo "<pre>";
print_r($capitals);
$capitals["China"]="Beijing";
echo "<pre>";
print_r($capitals);
?>

<?php 

?>