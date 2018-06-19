<?php
	
	$alea = rand(1, 100);
	
	
	for ($i = 0; $i < 10; $i++) {
	
	$resp = readline("Veuillez deviner un nombre entre 0 et 100: ");

	if ($alea < $resp) {
	echo("Ah non, plus petit que $resp \n");
	}

	else if ($alea > $resp) {
	echo("Ah non, plus grand que $resp \n");
	} 

	else if ($alea == $resp) {
	echo("$alea, c'est bon!  \n");
	break;
	}

	
	}

#	echo("\n".$alea);
	
?>
