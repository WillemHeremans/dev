<?php
session_start();

include_once 'config.php';

include_once 'connexion.php';

if (isset($_COOKIE['lieu']))

{

$query=$bdd->prepare('SELECT * FROM profils WHERE lieu_1 = :lieu_1 AND pseudo != :pseudo');
$query->bindValue(':lieu_1',$_COOKIE['lieu'], PDO::PARAM_STR);
$query->bindValue(':pseudo',$_COOKIE['pseudo'], PDO::PARAM_STR);
$query->execute();
$data=$query->fetchAll( PDO::FETCH_ASSOC );

}


?>

<?php foreach($data as $data): ?>
<?php
 
if($data['pref_1'] == $_COOKIE['pref'] && $data['age'] == $_COOKIE['age']) 

{
$rate = "100%";
$gold = "border: 5px solid gold;";
}

else if ($data['pref_1'] == $_COOKIE['pref'] || $data['age'] == $_COOKIE['age'])

{
$rate = "66,66%";
$gold = "border: 5px solid silver;";
}


else {
$rate = "33,33%";
$gold = "border: none;";
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

<div style="display: inline-block; ">

<h2 style="text-align:center">Match avec <?php echo $data['pseudo'] ?></h2>

<div class="card" style="<?php echo $gold ?>">
  <img src="<?php echo $data['avatar'] ?>" alt="avatar" style="width:100%">
  <h1><?php echo $data['pseudo'] ?></h1>
  <p class="title"><a href="age.php"><?php echo $data['age'] ?></a></p>
  <p>Ma préférence: <a href="pref_1.php"><b><?php echo $data['pref_1'] ?></b></a></p> 
  <p>Mon lieu: <b><a href="lieu_1.php" style="color:green"><?php echo $data['lieu_1'] ?></a></b></p>
  <div style="margin: 24px 0;">
    <a href="../omdb/manipJSON.php"><i class="fa fa-search"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>

 <p><button>Matching rate = <?php echo $rate ?></button></p>
</div>
</div>


</body>
</html>

<?php endforeach ?>


