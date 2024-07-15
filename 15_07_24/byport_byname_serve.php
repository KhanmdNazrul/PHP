<?php
 echo "HTTP's default port number is: ".getservbyname("https", "tcp");
 echo "<br>";
 echo "Port 3310's default service is: ".getservbyport("443", "tcp");
 ?>