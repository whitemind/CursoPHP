<?php

$conn = new mysqli("localhost","root","","dbPHP7");

if ($conn->connect_error) {

	echo "Error " . $conn->connect_error;
	exit;
}

 ?>