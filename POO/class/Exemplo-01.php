<?php 

class Pessoa {

	public $nome; //Atributo

	public function falar() {//Método (Função dentro da classe)

		return "O meu nome é ".$this->nome;

	}

}

$guilherme = new Pessoa();
$guilherme->nome = "Guilherme Ribeiro";
echo $guilherme->falar();

 ?>
