<?php
/*JSON*/
$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Afonso',
	'idade'=>6
));

array_push($pessoas, array(
	'nome'=>'Madalena',
	'idade'=>2

));

echo json_encode($pessoas);

//print_r($pessoas[0]);

?>