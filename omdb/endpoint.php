<?php

#$url = '//www.example.com/path?googleguy=googley+nana';

#// Prior to 5.4.7 this would show the path as "//www.example.com/path"
#var_dump(parse_url($url));

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
#echo $_POST['t'];
#echo "<br>";
#echo  $_POST['apikey'];

#echo "<br>";
echo "<br>";



$url = 'https://www.omdbapi.com/?t=' .$_POST['t']. '&apikey=b9957574'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

echo $characters->Title . '<br>';
echo $characters->Year . '<br>';
echo $characters->Plot . '<br>';

echo '<img src="'.$characters->Poster.'" alt="Affiche">';



#foreach ($characters as $character) {
#	echo $character . '<br>';
#}






?>
