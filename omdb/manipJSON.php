<?php

$url = 'https://www.omdbapi.com/?t=+THE+SHAPE+OF+WATER&apikey=b9957574'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

echo $characters->Title . '<br>';
echo $characters->Year . '<br>';

echo '<img src="'.$characters->Poster.'" alt="Affiche">';

#foreach ($characters as $character) {
#	echo $character . '<br>';
#}



?>
