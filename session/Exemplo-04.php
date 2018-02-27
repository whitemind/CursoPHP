<?php 

//session_id('mfmfub61a6csi00iknii2v4klk');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

 ?>