<!-- <?php 
$data = file("user.txt");
// echo"<pre>";
// print_r($data);
echo "<table border = '1' >";
echo "<tr><th>Name</th><th>Profession</th><th>Color</th></tr>";

foreach($data as $item){
  $line =  explode("|", $item);
  list($name, $profession, $color) = $line;
  echo "<tr><td>$name</td>
  <td>$profession</td>
  <td>$color</td></tr>";
//   echo"<pre>";
//   print_r($line);
    //print $item . "<br>";
}
echo "</table>";

?> -->
<?php 
$data = file("user.txt");
echo "<table border = '2'>";
echo "<tr><th>Name</th><th>Profession</th><th>Color</th></tr>";
foreach($data as $item){
   $line = explode("|", $item);//get the array value with the separator..
   list($name,$profession,$color) = $line;
echo "<tr><td>$name</td>
<td>$profession</td>
<td>$color</td></tr>";
}
echo "</table>";
?>