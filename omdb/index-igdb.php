<?php
if (!empty($_GET)&&isset($_GET['search'])){
	envoi($_GET['search']);
}

function envoi () {

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER  => array('user_key: 06206e20b60580e091e3ec2118187bdf', 'Accept: application/json'),
    
));

}

echo '
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <meta user-key="06206e20b60580e091e3ec2118187bdf">
  <link rel="stylesheet" href="style.css">
  <title>Recherche via Open Movie Database</title>
</head>
<body>

	<h1 class="byline">Recherche via Open Movie Database & MusicBrainz</h1>

  <form class="form-wrapper cf" action="https://api-endpoint.igdb.com/games/" method="get" target="_blank">

      <input type="text" placeholder="Entrez un titre de film..." name="search">
    
      <button type="submit">Chercher</button>

  </form>

 
</body>
</html>';



#header('user-key: 06206e20b60580e091e3ec2118187bdf');
#header('accept: application/json');

#var_dump(header);


?>
