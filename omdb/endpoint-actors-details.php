<?php

	if (!isset($_GET) || empty($_GET))

	{

	echo '

	<!DOCTYPE html>
	<html>
	<head>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="style.css">
	  <title>Recherche via Open Movie Database</title>
	</head>
	<body>

		<h1 class="byline">Rechercher une personnalité du cinéma</h1>

	  <form class="form-wrapper cf" action="" method="get" target="_blank">

	      <input type="text" placeholder="Entrez le nom d\'un acteur/réalisateur..." name="query">
	      <input type="hidden" name="api_key" value="2844cf5c3df9481565054c3a1ac78115">
	      <input type="hidden" name="language" value="fr-FR">
	    
	      <button type="submit">Chercher</button>

	  </form>
	 
	</body>
	</html>




	';

	}
	
	else {
	
	
	$uri = $_SERVER['REQUEST_URI'];

$myurl = parse_url($uri);

$url = 'http://api.themoviedb.org/3/search/person?'.$myurl["query"]; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
$id = $characters->results[0]->id;
$actor = 'https://api.themoviedb.org/3/person/'.$id.'?api_key=2844cf5c3df9481565054c3a1ac78115&language=fr-FR';
$actorData = file_get_contents($actor);
$details = json_decode($actorData);

echo '
<style>

.affiche {

animation-name: fromRight;
animation-timing-function: ease-in-out;
animation-duration: 1.5s;

}

@keyframes fromRight {
    from {margin-left: -1800px;}
    to {margin-left: 0px;}
}

</style>
';


echo '<br />';
echo '<br />';

echo '<h1 style="text-align:center;">'.$details->name.'</h1>';

echo '<br />';
echo '<br />';

echo '
<p class="affiche" style="text-align:center;"><img style="max-height:500px;" src="https://image.tmdb.org/t/p/w500/'.$details->profile_path.'"></p>
';


echo '<br />';
echo '<br />';

echo '<p style="text-align: justify;">'.$details->biography.'</p>';

	}


?>

