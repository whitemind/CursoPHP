<?php

$json = '[{"nome":"Afonso","idade":6},{"nome":"Madalena","idade":2}]';

$data = json_decode($json, true);

var_dump($data);

//CTRL+u

?>