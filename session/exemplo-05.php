<?php

require_once ("config.php");

PHP_SESSION_DISABLED;

echo session_save_path().'<br/>';

//session_destroy();

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "As sessão esta desabilitada.";
		break;

	case PHP_SESSION_NONE:
		echo "As sessão esta habilitadas, mas nenhuma sessão existe.";
		break;

	case PHP_SESSION_ACTIVE:
		echo "As sessão esta habilitadas, e uma sessão existe.";
		break;
	
	default:
		echo "ERRO: Não foi tratado o resultado.";
		break;
}

?>