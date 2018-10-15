<?php

$pessoa = array();

array_push($pessoa, array(

	'nome'=>'Mayco Vilefort',
	'idade'=>30
));

array_push($pessoa, array(

	'nome'=>'Jessica Vilefort',
	'idade'=>29
));

echo json_encode($pessoa);

?>