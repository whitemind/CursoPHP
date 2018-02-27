<?php 

require_once("config.php");

session_unset($_SESSION["nome"]); //limpa variáveis de sessão
//session_destroy($_SESSION["nome"]); //Limpa variáveis e remove o utilizador

echo $_SESSION["nome"];

?>