<?php 

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Visualiza um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Lista todos os usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios pesquisa por Login
//$search = Usuario::search("Bru");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","123456");

echo $usuario;


 ?>