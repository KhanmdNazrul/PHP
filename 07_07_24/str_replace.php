<?php
 $author = "jason@example.com";
 $author = str_replace("@","(at)",$author);
 echo "Contact the author of this article at $author.";
 ?>
 <?php
 echo "<br>";
// Provides: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

// Provides: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Provides: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

echo $newphrase = str_replace($healthy, $yummy, $phrase);

// Provides: 2
echo "<br>";
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;
?>