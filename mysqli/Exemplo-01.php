<?php 

$conn = new mysqli("localhost","root","","dbPHP7");

if ($conn->connect_error) {

	echo "Error " . $conn->connect_error;
	exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(?,?)");

/*
Character	Description
i	corresponding variable has type integer
d	corresponding variable has type double
s	corresponding variable has type string
b	corresponding variable is a blob and will be sent in packets
*/

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

 ?>