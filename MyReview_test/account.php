<?php

include_once 'config.php';

include_once 'connexion.php';

include_once 'request.php';

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <title>FORMULAIRE</title>
</head>
<body>


  <form class="formulaire" action="" method="post" name="addData" id="Pref">

    <h1>Créer un compte</h1>

    <div class="pseudo">
      <label for="">Pseudo</label><br>
      <input type="text" placeholder="Choisissez votre pseudo..." name="pseudo" value="" id="pseudo">
    </div>

<br />

<label>Quelle est votre tranche d'âge ?</label>

    <select name="age" form="Pref">
  <option value="-18">-18 ans</option>
  <option value="18-25">18-25 ans</option>
  <option value="25-35">25-35 ans</option>
  <option value="35_plus">+35 ans</option>
</select>
<br />
<br />
<label>Choisissez votre préférence N°1!</label>

<select name="pref_1" form="Pref" id="Pref_1">
  <option value="Ambiance">L'ambiance</option>
  <option value="Service">Le service</option>
  <option value="Responsable">Responsable ( bio, proximité, etc)</option>
  <option value="Rapidité">La rapidité</option>
  <option value="Type de cuisine">Type de cuisine</option>
</select>
<br />

<label>Choisissez votre préférence N°2</label>

<select name="pref_2" form="Pref" id="Pref_2">
  <option value="Ambiance">L'ambiance</option>
  <option value="Service">Le service</option>
  <option value="Responsable">Responsable ( bio, proximité, etc)</option>
  <option value="Rapidité">La rapidité</option>
  <option value="Type de cuisine">Type de cuisine</option>
</select>
<br />

<label>Choisissez votre préférence N°3</label>

<select name="pref_3" form="Pref" id="Pref_3">
  <option value="Ambiance">L'ambiance</option>
  <option value="Service">Le service</option>
  <option value="Responsable">Responsable ( bio, proximité, etc)</option>
  <option value="Rapidité">La rapidité</option>
  <option value="Type de cuisine">Type de cuisine</option>
</select>
<br />

<label>Choisissez votre préférence N°4!</label>

<select name="pref_4" form="Pref" id="Pref_4">
  <option value="Ambiance">L'ambiance</option>
  <option value="Service">Le service</option>
  <option value="Responsable">Responsable ( bio, proximité, etc)</option>
  <option value="Rapidité">La rapidité</option>
  <option value="Type de cuisine">Type de cuisine</option>
</select>
<br />

<label>Choisissez votre préférence N°5!</label>

<select name="pref_5" form="Pref" id="Pref_5">
  <option value="Ambiance">L'ambiance</option>
  <option value="Service">Le service</option>
  <option value="Responsable">Responsable ( bio, proximité, etc)</option>
  <option value="Rapidité">La rapidité</option>
  <option value="Type de cuisine">Type de cuisine</option>
</select>
<br />
<br />



<label>Choisissez votre lieu N°1!</label>

<select name="lieu_1" form="Pref" id="Lieu_1">
  <option value="Cuisine du monde">Cuisine du monde (asiatique,...)</option>
  <option value="Brasserie">Brasserie</option>
  <option value="BIO">BIO (exki...)</option>
  <option value="Fast food">Fast food (quick...)</option>
  <option value="Gastronomique">Gastronomique</option>
</select>
<br />

<label>Choisissez votre lieu N°2</label>

<select name="lieu_2" form="Pref" id="Lieu_2">
  <option value="Cuisine du monde">Cuisine du monde (asiatique,...)</option>
  <option value="Brasserie">Brasserie</option>
  <option value="BIO">BIO (exki...)</option>
  <option value="Fast food">Fast food (quick...)</option>
  <option value="Gastronomique">Gastronomique</option>
</select>
<br />

<label>Choisissez votre lieu N°3</label>

<select name="lieu_3" form="Pref" id="Lieu_3">
  <option value="Cuisine du monde">Cuisine du monde (asiatique,...)</option>
  <option value="Brasserie">Brasserie</option>
  <option value="BIO">BIO (exki...)</option>
  <option value="Fast food">Fast food (quick...)</option>
  <option value="Gastronomique">Gastronomique</option>
</select>
<br />

<label>Choisissez votre lieu N°4!</label>

<select name="lieu_4" form="Pref" id="Lieu_4">
  <option value="Cuisine du monde">Cuisine du monde (asiatique,...)</option>
  <option value="Brasserie">Brasserie</option>
  <option value="BIO">BIO (exki...)</option>
  <option value="Fast food">Fast food (quick...)</option>
  <option value="Gastronomique">Gastronomique</option>
</select>
<br />

<label>Choisissez votre lieu N°5!</label>

<select name="lieu_5" form="Pref" id="Lieu_5">
  <option value="Cuisine du monde">Cuisine du monde (asiatique,...)</option>
  <option value="Brasserie">Brasserie</option>
  <option value="BIO">BIO (exki...)</option>
  <option value="Fast food">Fast food (quick...)</option>
  <option value="Gastronomique">Gastronomique</option>
</select>
<br />
<br />
<br />


    <input type="hidden" value="Submit" name="addData" id="submit">

  </form>


<script type="text/javascript">
var prefUn = document.getElementById("Pref_1");
var prefDeux = document.getElementById("Pref_2");
var prefTrois = document.getElementById("Pref_3");
var prefQuatre = document.getElementById("Pref_4");
var prefCinq = document.getElementById("Pref_5");



prefCinq.onchange = function prefSimOrNot () {

if (prefUn.value == prefDeux.value | prefUn.value == prefTrois.value | prefUn.value == prefQuatre.value | prefUn.value == prefCinq.value) {

alert("Attention!\nUn choix différent par ligne!");
}

else if (prefDeux.value == prefTrois.value | prefDeux.value == prefQuatre.value | prefDeux.value == prefCinq.value | prefUn.value == prefCinq.value) {
alert("Attention!\nUn choix différent par ligne!");
}

else if (prefTrois.value == prefQuatre.value | prefTrois.value == prefCinq.value) {
alert("Attention!\nUn choix différent par ligne!");
}

else if (prefQuatre.value == prefCinq.value) {
alert("Attention!\nUn choix différent par ligne!");
}

}

var lieuUn = document.getElementById("Lieu_1");
var lieuDeux = document.getElementById("Lieu_2");
var lieuTrois = document.getElementById("Lieu_3");
var lieuQuatre = document.getElementById("Lieu_4");
var lieuCinq = document.getElementById("Lieu_5");
var submit = document.getElementById("submit");



lieuCinq.onchange = function lieuSimOrNot () {

if (lieuUn.value == lieuDeux.value | lieuUn.value == lieuTrois.value | lieuUn.value == lieuQuatre.value | lieuUn.value == lieuCinq.value) {

alert("Attention!\nUn choix différent par ligne!");
}

else if (lieuDeux.value == lieuTrois.value | lieuDeux.value == lieuQuatre.value | lieuDeux.value == lieuCinq.value | lieuUn.value == lieuCinq.value) {
alert("Attention!\nUn choix différent par ligne!");
}

else if (lieuTrois.value == lieuQuatre.value | lieuTrois.value == lieuCinq.value) {
alert("Attention!\nUn choix différent par ligne!");
}

else if (lieuQuatre.value == lieuCinq.value) {
alert("Attention!\nUn choix différent par ligne!");
}

else {
document.getElementById("submit").type = "submit";
}


}
</script>

</body>
</html>
