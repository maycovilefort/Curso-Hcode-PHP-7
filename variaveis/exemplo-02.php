<?php

/*
	Abaixo declaramos as variaveis para a pessoa.
*/
$anoNascimento = 1988;
$nomeCompleto = "Mayco Vilefort";

// Na linha debaixa temos duas variaveis uma delas com numero no nome.
$nome1 = "João";
$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit();

// $1nome = ""; -> Não é possivel criar variaveis iniciando com números.

//Exibe na tela a variavel $nome1 e pula uma linha.
echo $nome1;
echo "<br/>";

// Exclui uma variável da memória.
unset($nome1);

// Verifica se a variavel existe.
if(isset($nome1)){
	echo $nome1;	
}

?>

