<?php

// Exibe alguma coisa como: Monday 8th of August 2005 03:12:46 PM

$dataAgora = date('l jS \of F Y');

$explodiu = explode(" ", $dataAgora);

switch ($explodiu[0]) {
	case 'Sunday':
		$explodiu[0] = str_replace('Sunday', 'Domingo', $explodiu[0]);
		break;

	case 'Monday':
		$explodiu[0] = str_replace('Monday', 'Segunda-Feira', $explodiu[0]);
		break;

	case 'Tuesday':
		$explodiu[0] = str_replace('Tuesday', 'Terça-Feira', $explodiu[0]);
		break;

	case 'Wednesday':
		$explodiu[0] = str_replace('Wednesday', 'Quarta-Feira', $explodiu[0]);
		break;

	case 'Thursday':

		$explodiu[0] = str_replace('Thursday', 'Quinta-Feira', $explodiu[0]);
		break;

	case 'Friday':
		$explodiu[0] = str_replace('Friday', 'Sexta-Feira', $explodiu[0]);
		break;

	case 'Saturday':
		$explodiu[0] = str_replace('Saturday', 'Sábado', $explodiu[0]);
		break;
	
	default:
		echo 'Dia da semana não encontrado';
		break;
}

switch ($explodiu[3]) {
	case 'January':
		$explodiu[3] = str_replace('January', 'janeiro', $explodiu[3]);
		break;

	case 'February':
		$explodiu[3] = str_replace('February', 'fevereiro', $explodiu[3]);
		break;

	case 'March':
		$explodiu[3] = str_replace('March', 'fevereiro', $explodiu[3]);
		break;

	case 'April':
		$explodiu[3] = str_replace('April', 'abril', $explodiu[3]);
		break;

	case 'May':
		$explodiu[3] = str_replace('May', 'maio', $explodiu[3]);
		break;

	case 'June':
		$explodiu[3] = str_replace('June', 'julho', $explodiu[3]);
		break;

	case 'August':
		$explodiu[3] = str_replace('August', 'agosto', $explodiu[3]);
		break;

	case 'September':
		$explodiu[3] = str_replace('September', 'setembro', $explodiu[3]);
		break;

	case 'October':
		$explodiu[3] = str_replace('October', 'outubro', $explodiu[3]);
		break;

	case 'November':
		$explodiu[3] = str_replace('November', 'novembro', $explodiu[3]);
		break;

	case 'December':
		$explodiu[3] = str_replace('December', 'dezembro', $explodiu[3]);
		break;
	
	default:
		echo 'Mês não encontrado';
		break;
}

$dataTraduzida = $explodiu[0].', dia '.substr($explodiu[1], 0, 2).' de '.$explodiu[3].' de '.$explodiu[4];

echo $dataAgora.'<br/>';
echo '<br/>';
echo $dataTraduzida.'<br/>';

?>