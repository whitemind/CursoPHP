<?php

interface Veiculo {

	public function acelarar($velocidade);
	public function travar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

	public function acelarar($velocidade) {

		echo "O veiculo acelarou até " . $velocidade . " km/h";
	}

	public function travar($velocidade) {

		echo "O veiculo travou até " . $velocidade . " km/h";
	}

	public function trocarMarcha($marcha) {

		echo "O veiculo engatou a marcha " . $marcha;

	}

}

?>