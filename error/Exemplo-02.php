<?php 

//tratar erros o error_reporting sobrepoe-se a configuração default
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

 ?>