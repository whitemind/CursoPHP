<?php 

$name = "images";

if (!is_dir($name)) {
	//criar
	mkdir($name);

} else {

	rmdir($name); //apagar
	echo "O diretorio : $name já existe";
}

 ?>