<?php

$qualASuaIdade = 150;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
	echo "Criança";
}else if($qualASuaIdade < $idadeMaior){
	echo "Adolecente";
}else{
	echo "Idoso";
}

echo "<br/>";

echo ($qualASuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade"

?>