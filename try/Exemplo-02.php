<?php 

function trataNome($nome) {

	if(!$nome) {

		throw new Exception("Nenhum nome foi passado", 1);
		
	}

	echo ucfirst($nome)."<br>";

}

try {

	trataNome("Afonso");
	trataNome("");

} catch (Exception $e) {

	echo $e->getMessage();

} finally {

	echo "Executou o try!";

}


 ?>