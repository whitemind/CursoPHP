<?php 

$data = array(
	"empresa"=>"genetica"
);

//cookie é persistente, é um arquivo fisico
//time() + segundos

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

 ?>