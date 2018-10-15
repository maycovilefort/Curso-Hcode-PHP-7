<?php

function soma(float ...$valores) {

	return array_sum($valores);

}

echo soma(2, 2).'<br/>';
echo soma(25, 33).'<br/>';
echo soma(1.5, 3).'<br/>';

?>