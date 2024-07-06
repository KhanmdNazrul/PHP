<?php  
$str1 = "123456";
$str2 = "123456";

if(strcmp($str1,$str2)==0){
    echo "Matching Found";
}else{
    echo "Not Match";
};

echo "<hr>";
$str1 = "Today I have Simple Job to be Done.";
$str2 = "Today I have Simple Job to be done.";
if(strcasecmp($str1,$str2)==0){
    echo "Matching Found";
}else{
    echo "Not Match";
};

?>

