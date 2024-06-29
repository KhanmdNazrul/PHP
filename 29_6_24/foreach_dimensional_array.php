<?php

$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");

$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");

$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");

foreach ($customers as $customer) {
    //vprintf("<p>Name: %s<br>E-mail: %s<br>Phone: %s</p>", $customer);
   // foreach($customer as $item){
       // echo $item . "";
  //  }
    //echo "<br>";
    list($name,$gmail,$number) = $customer;
    
    echo "Name: $name <br>  Gmail:  $gmail <br> Contact Number: $number;";
    echo "<hr>";
}
