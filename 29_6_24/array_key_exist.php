<?php 
$students = array("Tanim"=>20, "Saif"=>30, "Abdullah"=>35);

if(array_key_exists("Tanima", $students)){
echo "Tanim got {$students['Tanim']}";
}else{
    echo "Not Found Mohiuddin";
}
//array _search
echo "<br>";
echo "<hr>";
$students = array("Tanim"=>20, "Saif"=>30, "Abdullah"=>35);
//(array_search("19",$students));
$found = array_search("30",$students);
 if($found){
    echo "Found {$found} and he scored $students[$found]";
}else{
    echo "Not Found";
}

?>