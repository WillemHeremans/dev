
var cpt = 0
var random = 0

let main = document.getElementById("main")
let startApp = document.getElementById("start")
let congrats = document.getElementById("congrats")
let gameOver = document.getElementById("dommage")
let result = document.getElementById("result")
let level = document.getElementById("level")
let bodyTitle = document.getElementById("bodyTitle")

function start(){
  main.className="hide";
  startApp.className="hide";
  congrats.className="hide";
  gameOver.className="hide";
  result.className="hide";
  level.className="show";
  bodyTitle.className="hide";
}

function easy() {
  random = Math.floor((Math.random() * 25) + 1);
  cpt = 5
  document.getElementById("chance").innerHTML = "<h2>Tu as "+ cpt + " chances de trouver le nombre exact ...</h2>"
  document.getElementById("between").innerHTML = "<h3>Choisissez un chiffre entre 1 et 25 !</h3>"
  console.log('Mystery number :' + random);
  main.className="show";
  level.className="hide";
  bodyTitle.className="show";
}

function middle() {
  random = Math.floor((Math.random() * 50) + 1);
  cpt = 6
  document.getElementById("chance").innerHTML = "<h2>Tu as "+ cpt + " chances de trouver le nombre exact ...</h2>"
  document.getElementById("between").innerHTML = "<h3>Choisissez un chiffre entre 1 et 50 !</h3>"
  console.log('Mystery number :' + random);
  main.className="show";
  level.className="hide";
  bodyTitle.className="show";
}

function hard() {
  random = Math.floor((Math.random() * 100) + 1);
  cpt = 6
  document.getElementById("chance").innerHTML = "<h2>Tu as "+ cpt + " chances de trouver le nombre exact ...</h2>"
  document.getElementById("between").innerHTML = "<h3>Choisissez un chiffre entre 1 et 100 !</h3>"
  console.log('Mystery number :' + random);
  main.className="show";
  level.className="hide";
  bodyTitle.className="show";
}

function test() {
  var number = document.getElementById("number").value
console.log('Essay numero :' + cpt);
  if (cpt-1 > 0) {
    cpt--
    if (number < random) {
      document.getElementById("result").innerHTML = "C'est plus grand que " + number + " !<br>Il te reste " + cpt + " chances..."
      result.className="show";
    }
    else if (number == random)
    {
      document.getElementById("super").innerHTML = "Félicitation ! <br> Le nombre est bien " + number + " !"
      main.className="hide";
      congrats.className="show";
      bodyTitle.className="hide";
      console.log(cpt);
    }
    else {
      document.getElementById("result").innerHTML = "C'est plus petit que " + number + " !<br>Il te reste " + cpt + " chances..."
      result.className="show";
    }
  }
  else if (number == random)
  {
    document.getElementById("super").innerHTML = "Félicitation ! <br> Le nombre est bien " + number + " !"
    main.className="hide";
    congrats.className="show";
    bodyTitle.className="hide";
    console.log(cpt);
  }
  else {
    document.getElementById("gameOver").innerHTML = "Game Over ! <br>Le numéro était " + random
    main.className="hide";
    gameOver.className="show";
    bodyTitle.className="hide";
  }
}
