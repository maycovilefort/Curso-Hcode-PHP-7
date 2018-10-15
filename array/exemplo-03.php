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

print_r($pessoa);

echo "<hr/>";

echo $pessoa[0]['nome'];

?>