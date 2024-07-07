<?php
// Open a text file for reading purposes
//  $fh = fopen('files/user.txt', 'r');
//  // While the end-of-file hasn't been reached, retrieve the next line
//  //echo fgets($fh);
//  while(!feof($fh)) echo fgets($fh)."<br>";

//  fclose($fh);

//  // Close the file
//  //fclose($fh);
?>

 <?php
    $fh = fopen('files/user.txt', 'a');
    fwrite($fh, "hello! I am on u. <br>");
    //fclose($fh);
    //while(!feof($fh)){
       // fwrite($fh, "hello! I am on u. <br>");
     echo fgets($fh)."<br>";
    //}
    fclose($fh);
    //unlink('files/user.txt');
?>