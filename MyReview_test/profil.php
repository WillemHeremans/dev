<?php
session_start();

include_once 'config.php';

include_once 'connexion.php';

if (isset($_COOKIE['pseudo']))

{

$query=$bdd->prepare('SELECT * FROM profils WHERE pseudo = :pseudo');
$query->bindValue(':pseudo',$_COOKIE['pseudo'], PDO::PARAM_STR);
$query->execute();
$data=$query->fetch();

echo '
<!DOCTYPE html>
<html>
<head>
<title>PROFIL de ' .$data['pseudo']. '</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8"/>
<title>MyReview: Profil de ' .$data['pseudo']. '</title>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Profil de ' .$data['pseudo']. '</h2>

<div class="card">
  <img src="avatar-1606916_1280.resized.png" alt="avatar" style="width:100%">
  <h1>' .$data['pseudo'].'</h1>
  <p class="title">' .$data['age'].'</p>
  <p>Ma préférence: <a href="MyReview.php"><b>' .$data['pref_1']. '</b></a></p> 
  <p>Mon lieu: <b>'.$data['lieu_1'].'</b></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p>
</div>

</body>
</html>
';

}
?>