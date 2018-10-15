<?php

	// Função Date
	echo date('d/m/Y H:i').'<br/>'; 

	// Exibe alguma coisa como: Monday
	echo date("l").'<br/>';

	// Exibe alguma coisa como: Monday 8th of August 2005 03:12:46 PM
	echo date('l jS \of F Y h:i:s A').'<br/>';

	// Exibe: July 1, 2000 is on a Saturday
	echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)).'<br/>';

	echo time();
		
?>