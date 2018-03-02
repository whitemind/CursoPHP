<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Guilherme Ribeiro");
$cad->setEmail("guilherme.ribeiro@x.pt");
$cad->setSenha("123456");

$cad->registarVenda();

 ?>