<?php

$total = 100;
$desconto = 0.9;

echo "Total: ".$total."<br/>";

do {

	$total *= $desconto;

} while ($total > 100);

echo "Total com desconto: ".$total;

?>