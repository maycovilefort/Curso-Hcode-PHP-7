<?php

$pessoa = array();

array_push($pessoa, array(

	'nome'=>'Mayco Vilefort',
	'idade'=>30,
	'sexo'=>'M',
	'nascimento'=>'20/04/1988'
));

array_push($pessoa, array(

	'nome'=>'Jessica Vilefort',
	'idade'=>29
));

print_r($pessoa);

echo "<hr/>";

echo $pessoa[0]['nome'];

?>