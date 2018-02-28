<?php 
/*O codigo torna-se abstrato porque a função pode fazer diferentes situações*/
function ola() {

	$argumentos = func_get_args();

	return $argumentos;

}

var_dump(ola("Bom dia", 10));

 ?>