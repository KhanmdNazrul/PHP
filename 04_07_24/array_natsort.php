<?php 
$files = array('picture1.jpg', 'picture10.jpg', 'picture2.jpg', 'picture20.jpg', 'picture30.jpg', 'picture40.jpg', 'picture5.jpg', 'picture4.jpg', 'picture9.jpg' );
sort($files);

echo "<pre>";
 print_r($files);


 echo "<hr>";


 natsort($files);
echo "<pre>";
 print_r($files);

//  echo "<hr>"; //it requires capitalize on array elements to get output;
//  natcasesort($files);
//  echo "<pre>";
//   print_r($files);
?>