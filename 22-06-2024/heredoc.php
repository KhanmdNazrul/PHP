<?php

$date = "22 June 2024";
$text = "Today is Saturday";
$website = "http://www.romatermini.it";
echo <<<EXCERPT
<h1>$text</h1>
<p>$date</p>
<a href = "$website">Click Here</a>
EXCERPT;
?>