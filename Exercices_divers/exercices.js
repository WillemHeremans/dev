// Exercice 2;

alert("Nom :" + " " + nom + "\n" + "Prénom :" + " " + prenom + "\n" + "Ville :" + " " + city);


// Exercice 3;

var nom = prompt("Veuillez saisir votre nom");
alert("Bonjour" + " " + nom + "!");

// Exercice 4;

var nom = prompt("Veuillez saisir votre nom");
var prenom = prompt("Veuillez saisir votre prénom");
var city = prompt("Veuillez saisir votre ville");
alert("Nom :" + " " + nom + "\n" + "Prénom :" + " " + prenom + "\n" + "Ville :" + " " + city);

// Exercice 5.v1, ici la méthode utilisée ne porte que sur le premier chiffre de la variable a, ne fonctionne donc pas pour un nombre à 2 chiffres;

var a = prompt("Veuillez saisir un nombre à virgule").replace(",",".");
var b = prompt("Veuillez encore saisir un nombre à virgule").replace(",",".");
var c = a[0]*b;
alert(c);

// Exercice 5 v2, fonctionnement correct: Math.floor arrondit vers le bas, donc gardera toujours le nombre entier tel qu'introduit ;

var a = prompt("Veuillez saisir un nombre à virgule").replace(",",".");
var b = prompt("Veuillez encore saisir un nombre à virgule").replace(",",".");
var c = Math.floor(a)*b;
alert(c);

// Exercice 5 v3, ajout condition et alerte si une des valeurs introduites n'est pas un chiffre ;

var a = prompt("Veuillez saisir un nombre à virgule").replace(",",".");
var b = prompt("Veuillez encore saisir un nombre à virgule").replace(",",".");
var c = Math.floor(a)*b;

if ( isNaN(a) || isNaN(b) ) {
alert("Veuillez introduire des chiffres uniquement !")
}

else {
alert(c);
}

// Exercice 6;

function alea(min, max) {
  min = Math.ceil(1);
  max = Math.floor(2);
  return Math.floor(Math.random() * (max - min +1)) + min;
}

var resp = prompt("Veuillez deviner un nombre entre 1 et 2")

if (alea !== resp) {

alert("faux!")

}

else {

alert("Bravo!")

}


// test

var alea = Math.round(Math.random() * 10);
var resp = prompt("Veuillez deviner un nombre entre 0 et 10");

if (resp !== alea) {
alert("faux !")
}

else {
alert("Bravo!")
}



// nombre aléatoire entre 0 et 100, Math.round arrondit, Math.random génère un nombre entre 0 et 1 

var alea = Math.round(Math.random() * 10);
var resp = prompt("Veuillez deviner un nombre entre 0 et 10");

for (i = 0; i < 10; i++;) {

if (alea < resp) {
alert("plus grand")
}

else if (alea > resp) {
alert("plus petit")
} 

else if (alea == resp) {
alert("c'est bon")
}

break;
}

alert(alea);













