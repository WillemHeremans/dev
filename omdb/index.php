<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Recherche via Open Movie Database</title>
</head>
<body>

	<h1 class="byline">Recherche via Open Movie Database</h1>

  <form class="form-wrapper cf" action="http://www.omdbapi.com/" method="get" target="_blank">

      <input type="text" placeholder="Entrez un titre de film..." name="t">
      <input type="hidden" name="apikey" value="b9957574">
    
      <button type="submit">Chercher</button>

  </form>

<!-- 
<form class="form-wrapper cf" action="https://api-endpoint.igdb.com/games/" method="get" target="_blank">

      <input type="text" placeholder="Entrez un titre de jeux vidéo..." name="t">
      <input type="hidden" name="user_key" value="06206e20b60580e091e3ec2118187bdf">
    
      <button type="submit">Chercher</button>

  </form>
 -->
</body>
</html>
