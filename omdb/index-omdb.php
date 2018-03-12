<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Recherche via Open Movie Database</title>
</head>
<body>

	<h1 class="byline">Recherche via Open Movie Database & MusicBrainz</h1>

  <form class="form-wrapper cf" action="http://www.omdbapi.com/" method="get" target="_blank">

      <input type="text" placeholder="Entrez un titre de film..." name="t">
	<input type="hidden" name="plot" value="full">
      <input type="hidden" name="apikey" value="b9957574">
    
      <button type="submit">Chercher</button>

  </form>

<form class="form-wrapper cf" action="http://www.omdbapi.com/" method="get" target="_blank">

      <input type="text" placeholder="Entrez un titre de film..." name="s">
	<input type="hidden" name="type" value="movie">
      <input type="hidden" name="apikey" value="b9957574">
    
      <button type="submit">Chercher</button>

  </form>



 
</body>
</html>
