<?php
$path = 'files/user.txt';

 $path = 'files/book1.pdf';
 $mb = filesize($path)/1024/1024;
 echo round($mb,2) . "MB";
 
 ?> 