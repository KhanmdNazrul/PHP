<?php
 $e = 'c:';
 echo round((disk_free_space($e) /1024/1024/1024), 2);
 echo "<br>";
 $b = "e:";
 echo round((disk_free_space($b) /1024/1024/1024), 2);
 ?>