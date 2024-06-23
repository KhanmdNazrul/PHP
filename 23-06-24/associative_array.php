<?php 

$countries = array("Bangladesh" => "Dhaka", "India" => "New Delhi", "Srilanka"=>"Colombo", "Nepal"=>"Kathmondu");
echo "<pre>";
print_r($countries);
echo $countries["Bangladesh"];
?>

<?php  
$division = [
    "Dhaka" =>array(
        "population"=>"10lac", "Spot"=>"Old Dhaka", "Food"=>"Kacchi"
    ), "Rajshahi" => array(
        "Population" => "20lac", "Spot"=>"Ambagan", "Food"=>"Mango"
    ), "Khulna" => array(
        "Population" => "25lac", "Spot"=>"Sundarban", "Food"=>"Desert"
    )
    ];
    echo $division["Rajshahi"]["Food"];
?>