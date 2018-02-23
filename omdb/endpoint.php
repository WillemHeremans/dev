<?php

$url = $_SERVER['REQUEST_URI'];

#echo "<br>";
#// Prior to 5.4.7 this would show the path as "//www.example.com/path"
#var_dump(parse_url($url));

$myurl = parse_url($url);

#echo "<br>";
#echo "<br>";

#echo $myurl["query"];
#echo "<br>";
#echo "<br>";
#echo $_SERVER['REQUEST_URI'];
#echo "<br>";
#echo "<br>";
#echo $_SERVER['PHP_SELF'];
#echo "<br>";
#echo $_SERVER['SERVER_NAME'];
#echo "<br>";
#echo $_SERVER['HTTP_HOST'];
#echo "<br>";
#echo $_SERVER['HTTP_REFERER'];
#echo "<br>";
#echo $_SERVER['HTTP_USER_AGENT'];
#echo "<br>";
#echo $_SERVER['SCRIPT_NAME'];
#echo "<br>";


##echo "<br>";
#echo "<br>";



$url = 'https://www.omdbapi.com/?'.$myurl["query"]. ''; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
#$ratings = $characters->Ratings;


echo '<h1>'. $characters->Title .'</h1>';
echo "<br>";
echo '<p>Année de sortie: '. $characters->Year . '</p>';
echo "<br>";
echo $characters->Plot . '<br>';

echo "<br>";

echo '<p style="text-align:center;"><img src="'.$characters->Poster.'" alt="Pas d\'affiche disponible"></p>';

echo "<br>";

#echo implode($ratings);;

#echo "<br>";
#echo "<br>";
#var_dump($characters->Ratings);


#echo "<br>";
#echo "<br>";
#var_dump($characters);


#foreach ($characters as $character) {
#	echo $character . '<br>';
#}






?>
