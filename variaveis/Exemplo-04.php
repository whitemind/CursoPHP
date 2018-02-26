<?php
//URL - Uniform resource locator
//URI - Uniform resource identifier (HTTP, .com, .pt, HTTPS...)

//Variaveis predefinidas ou Arrays super globais

$nome = (string)$_GET["a"]; //Array superglobal localhost/Exemplo-04.php?a=112
$contacto = (int)$_GET["b"]; 

$ip = $_SERVER["REMOTE_ADDR"]; // Ir buscar o IP do provedor de acesso do utilizador
$script_name = $_SERVER["SCRIPT_NAME"]; //$_SERVER bom para criar o log do utilizador

echo $ip; 
echo $script_name;

//var_dump($nome);
//var_dump($contacto);

?>