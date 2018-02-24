<?php
	
	$nome = "Hcode";
	$site = 'www.Hcode.com.br';
	
	$ano = 1990;
	$salario = 5500.99;
	$bloqueado = false;
	///////////////////////////////////////////////////
	$frutas = array("Abacaxi","Banana","Manga","Laranja");

	echo $frutas[2];

	//Objeto
	$nascimento = new Datetime();

	//var_dump($nascimento);
	///////////////////////////////////////////////////
	//Tipos Especiais
	$arquivo = fopen("Exemplo-03.php","r");

	//var_dump($arquivo); //resource do tipo stream

	$nulo = null; //Ausencia de valor

?>