<?php

if (isset($_GET['search'])) {
	
        get_header('user-key: 06206e20b60580e091e3ec2118187bdf');
        get_header('Accept: application/json');
       get_headers('https://api-endpoint.igdb.com');
        
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

  <form class="form-wrapper cf" action="https://api-endpoint.igdb.com/games" method="get" target="_blank">

      <input type="text" placeholder="Entrez un titre de film..." name="search">

     <input type="hidden" value="*" name="fields">
      
    
      <button type="submit">Chercher</button>

  </form>

 
</body>
</html>';

#if (isset($_GET['search'])) {
#	
#        header('user-key: 06206e20b60580e091e3ec2118187bdf');
#        header('Accept: application/json');
#        get_headers('https://api-endpoint.igdb.com');
#        
#    } 



#header('user-key: 06206e20b60580e091e3ec2118187bdf');
#header('accept: application/json');

#var_dump(header);


?>
