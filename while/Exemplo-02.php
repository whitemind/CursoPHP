<?php

$totalVendas = 150;
$desconto = 0.9;

do {

	$totalVendas *= $desconto;

} while ($totalVendas > 100);

echo $totalVendas;

?>