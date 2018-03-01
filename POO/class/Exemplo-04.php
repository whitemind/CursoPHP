<?php 
/*
Metodo mágico
*/

class Endereco {

	private $rua;
	private $numero;
	private $cidade;

	//Metodo mágico
	public function __construct($a, $b, $c){

		$this->rua = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __destruct() {

		var_dump("DESTRUIR");

	}

	public function __toString(){

		return $this->rua.", ".$this->numero." - ".$this->cidade;

	}

}

$meuEndereco = new Endereco	("Rua Dr. Espirito",123, "Lisboa");

/*var_dump($meuEndereco);
unset($meuEndereco);*/

echo $meuEndereco;

 ?>