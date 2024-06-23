<?php 

 $colors = ["red","blue","green"];
 list($color1, $color2, $color3) = $colors;
 echo $color3;
 echo "<br>";
 echo "<br>";

?>
<?php
 function retrieveUserProfile()
 {
 $user[] = "Jason Gilmore";
 $user[] = "jason@example.com";
 $user[] = "English";
 return $user;
 }
 list($name, $email, $language) = retrieveUserProfile();
 echo "Name: {$name}, email: {$email}, language: {$language}";
 echo "<br>";
 echo "<br>";
 echo "<br>";
?>

<!-- <?php 

$fruits = ["Mango", "Banana", "Orange", "Jackfruit", "Grape"];

list($var1,$var2,$var3,$var4,$var5) = $fruits;
echo $var1;
?> -->

<?php 

function mohiUddin(){
    $abdullah[] = "Jason Glamore";
    $abdullah[] = "jason@example.com";
    $abdullah[] = "English";
    return $abdullah;
}
list($name,$email,$language) = mohiUddin();
echo "Name: {$name},  Email: {$email},  Language: {$language}";
?>
