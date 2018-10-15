<?php
////////////////////////////////////////////////////////
// Escopo de variárivais.

	$nome = "Glaucio";

	function teste() {
		global $nome;
		echo $nome;
		echo "<br/>";
	}

	function teste2() {
		$nome = "João";
		echo $nome . " agora no teste2";
	}

	teste($nome);

	teste2($nome);

?>