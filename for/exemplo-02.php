<?php 

$anos = NULL;

for ($i=date("Y"); $i > date("Y")-30; --$i) {
	global $anos;
	$anos .= $i . " - ";
}

$anos = substr($anos, 0, strlen($anos) - 3);

echo $anos;
?>