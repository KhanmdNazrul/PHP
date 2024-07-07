<?php
 $e = 'e:';
 // Determine total partition space
 $totalSpace = disk_total_space($e) / 1024/1024/1024;
 // Determine used partition space
 $usedSpace = $totalSpace - disk_free_space($e) /  1024/1024/1024;
 printf("Partition: %s (Allocated: %.2f GB. Used: %.2f GB.)",
 $e, $totalSpace, $usedSpace);
 ?>