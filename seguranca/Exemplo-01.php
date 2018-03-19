<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {}

$cmd = $_POST["cmd"];

echo "<pre>";

$command = escapeshellcmd($cmd);
//escapeshellarg


var_dump($command);

//$command = system($cmd, $retorno)


echo "</pre>";

 ?>

 <form method="post">

 	<input type="text" name="cmd">
 	<button type="submit">Enviar</button>
 	
 </form>