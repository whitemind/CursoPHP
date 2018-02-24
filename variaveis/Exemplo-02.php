<?php

	$anoNascimento = 1990;

	/**/
	$nomeCompleto = "Jose ...";

	//Na linha de baixo temos uma variável com numero no nome
	$nome1 = "Ana";

	$sobreNome = "Rafael";

	$nomeCompleto = $nome1 . " " . $sobreNome;

	echo $nomeCompleto;

	exit; //break da execução

	/*$this não pode ser usada*/

	echo $nome1;

	echo "<br/>";
	
	unset($nome1); //destruir a variável, eliminar da memória

	if (isset($nome1))
	{
		echo $nome1;	
	};


?>