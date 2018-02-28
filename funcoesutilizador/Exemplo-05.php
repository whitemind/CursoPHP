<?php 

$a = 10;

function trocaValor(&$b) {

	$b += 50;

	return $b;

}

echo $a;

echo "</br>";

echo trocaValor($a);

echo "</br>";
echo trocaValor($a);

echo "</br>";
echo $a;

 ?>