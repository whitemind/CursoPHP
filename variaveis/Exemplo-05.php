<?php

/*
Escopo de variáveis
*/

$nome = "Afonso";

function teste() {

	global $nome; //Uso do global por função, por padrão vem bloqueado a area de escopo
	echo $nome;
}

function teste2() {

	$nome = "João";
	echo $nome. " agora no teste2";
}

teste();

teste2();


?>