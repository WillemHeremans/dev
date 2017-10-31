<?php

	include '../../app/config/config.php';


	try{

	// A changer : dbname=nomDeVotreBaseDeDonnées
	$bdd = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
	}
	// On traite l'erreur (ex probleme de mot de passe, php rsique d'afficher
	// toute la ligne. Pour éviter ce problème : )
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
	// Notre requete à la base de donnée
	// SELECT = prend moi; * = tout ;FROM = de quel tableau ? film = mettreLeNomDeVotreTable
	
	$tabPDF = $bdd->query('SELECT * FROM pdfs LIMIT 10' );
	$imgGalerie = $bdd->query('SELECT * FROM photos LIMIT 50');


?>