<?php 

//passagem de valor por referencia com &

$pessoa = array(
	'nome'=>'Afonso',
	'idade'=>6
);

foreach ($pessoa as &$value) {
	if (gettype($value) === 'integer') $value +=1;
	echo $value.'<br>';
}

print_r($pessoa);

 ?>