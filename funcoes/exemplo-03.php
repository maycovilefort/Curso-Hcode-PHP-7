<?php

function ola($texto, $periodo = "Bom dia.") {

	return "Olá $texto $periodo <br/>";

}

echo ola("Mundo");
echo ola("","Boa noite");
echo ola("Mayco", "Boa tarde");
echo ola("Jessica");

?>