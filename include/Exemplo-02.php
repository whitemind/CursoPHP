<?php

//include "inc/Exemplo-01.php"; tenta funcionar mesmo que o ficheiro não exista ou que esteja com erros inclupde path e include dinamico(pessima pratica)

require_once "inc/Exemplo-01.php"; //obriga que o ficheiro exista e que esteja a funcionar corretamente senão gera um erro fatal
require_once "inc/Exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

?>