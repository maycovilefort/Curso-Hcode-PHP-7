<?php

$a = 10;

function trocaValor(&$b) {

	$b += 50;

	return $b;

}

echo trocaValor($a).'<br/>';
echo trocaValor($a).'<br/>';
echo '<hr/>';
echo $a . '<br/>';

?>