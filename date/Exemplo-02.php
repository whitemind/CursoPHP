<?php 

//$ts = strtotime("2001-09-11");

$ts = strtotime("now + 1 day");

echo date("l, d/m/Y", $ts);

echo "</br>";

$ts = strtotime("now + 1 week");

echo date("l, d/m/Y", $ts);

 ?>