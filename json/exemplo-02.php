<?php

$json = 
'[{"nome":"Mayco Vilefort","idade":30},{"nome":"Jessica Vilefort","idade":29}]';

$data = json_decode($json, true);

var_dump($data);

?>