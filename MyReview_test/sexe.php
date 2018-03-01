<?php
session_start();

include_once './core/config.php';

include_once './core/connexion.php';

if (isset($_COOKIE['sexe']))

{

$query=$bdd->prepare('SELECT * FROM profils WHERE sexe = :sexe AND pseudo != :pseudo');
$query->bindValue(':sexe',$_COOKIE['sexe'], PDO::PARAM_STR);
$query->bindValue(':pseudo',$_COOKIE['pseudo'], PDO::PARAM_STR);
$query->execute();
$data=$query->fetchAll( PDO::FETCH_ASSOC );

}
?>

<?php foreach($data as $data): ?>
<?php
 
if($data['age'] == $_COOKIE['age'] && $data['lieu_1'] == $_COOKIE['lieu'] && $data['sexe'] == $_COOKIE['sexe']) 

{
$rate = "100%";
$gold = "border: 5px solid gold;";
}

else if (($data['age'] == $_COOKIE['age'] && $data['lieu_1'] == $_COOKIE['lieu']) || ($data['age'] == $_COOKIE['age'] && $data['sexe'] == $_COOKIE['sexe']) || ($data['sexe'] == $_COOKIE['sexe'] && $data['lieu_1'] == $_COOKIE['lieu']))

{
$rate = "75%";
$gold = "border: none;";
}

else if ($data['age'] == $_COOKIE['age'] || $data['lieu_1'] == $_COOKIE['lieu'] ||  $data['sexe'] == $_COOKIE['sexe'])

{
$rate = "50%";
$gold = "border: none;";
}


else {
$rate = "25%";
$gold = "border: none;";
}



?>

<?php

if ($data['sexe'] == "F")
{
$sexe = "fa fa-venus";
}

else {
$sexe = "fa fa-mars";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Matching</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8"/>
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

<div style="display: inline-block; max-width:300px; min-width:300px;">

<h2 style="text-align:center">Match avec <?php echo $data['pseudo'] ?></h2>

<div class="card" style="<?php echo $gold ?>">
  <img src="./image/<?php echo $data['avatar'] ?>" alt="avatar" style="width:100%">
  <h1><?php echo $data['pseudo'] ?></h1>
  <p class="title"><a href="age.php"><?php echo $data['age'] ?></a> / <a href="#" style="color:magenta"><i class="<?php echo $sexe ?>"></i></a></p>
  <p>Ma préférence: <a href="pref_1.php"><b><?php echo $data['pref_1'] ?></b></a></p> 
  <p>Mon lieu: <b><a href="lieu_1.php"><?php echo $data['lieu_1'] ?></a></b></p>
  <div style="margin: 24px 0;">
    <a href="../omdb/manipJSON.php"><i class="fa fa-search"></i></a> 
    
 </div>
 <p><button>Matching rate = <?php echo $rate ?></button></p>
</div>
</div>


</body>
</html>

<?php endforeach ?>


