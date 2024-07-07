<?php
 $file = 'files/book1.pdf';
 echo "Created Time: " .date("d-m-y  g:i:sa", filectime($file)) ."<br>";
 echo "Modified Time: " .date("d-m-y  g:i:sa", filemtime($file))."<br>";
 echo "Access Time: " .date("d-m-y  g:i:sa", fileatime($file))."<br>";


 ?>