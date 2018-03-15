<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Recherche via The movie db</title>
</head>
<body>

	<h1 class="byline">Recherche via The movie db</h1>

  
  <form class="form-wrapper cf" action="https://api.themoviedb.org/3/genre/18/movies" method="get" target="_blank">

      
	<input type="hidden" name="include_adult" value="false">
	<input type="hidden" name="language" value="fr-FR">
      <input type="hidden" name="api_key" value="2844cf5c3df9481565054c3a1ac78115">
    
      <button type="submit">Chercher</button>

  </form>

<form class="form-wrapper cf" action="endpoint-themoviedb.php" method="get" target="_blank">

       
	<input type="hidden" name="language" value="fr-FR">
      <input type="hidden" name="api_key" value="2844cf5c3df9481565054c3a1ac78115">
      
    
      <button type="submit">Chercher</button>

  </form>



 
</body>
</html>
