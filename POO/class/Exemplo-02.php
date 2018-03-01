<?php 	

class Carro {

	private $modelo;
	private $motor;
	private $ano;

	//GET Modelo
	public function getModelo() {

			return $this->modelo;
	}

	//SET Modelo
	public function setModelo($modelo) {

			$this->modelo = $modelo;

	}

	//GET Motor
	public function getMotor():float {

		return $this->motor;
	}

	//SET Motor
	public function setMotor($motor) {

		$this->motor = $motor;
	}

	//GET Ano
	public function getAno():int{

		return $this->ano;
	}

	//SET Ano
	public function setAno($ano) {

		$this->ano = $ano;
	}

	//Exibir array de 
	public function exibir() {

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);

	}

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

/*
if (!empty($gol)) {
    print_r($gol);
}
*/

//print_r($gol->exibir());
var_dump($gol->exibir());

 ?>