<?php 

namespace Cliente;

class Cadastro extends \Cadastro {


	public function registarVenda(){

		echo "Foi registada uma venda para o cliente ".$this->getNome();

	}

}

 ?>