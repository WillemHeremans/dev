var http = require('http');

var url = require("url");

//var utf8 = require('utf8');

var server = http.createServer(function(req, res) {

	var page = url.parse(req.url).pathname;
	console.log(page);

  res.writeHead(200, {"Content-Type": "text/html"});

	if (page !== '/' && page !== '/profil') {
	 res.write('<head><meta charset="UTF-8"/><h1>ERREUR 404: la page recherchée n\'existe pas!</h1>')
}

	else if (page == '/') {

        res.write('<head><meta charset="UTF-8"/><h1>HOME</h1>\n<h2>PROFIL</h2>\n</head><p>MyReview : <b>MyReviewProject</b> app de rating</p><br /><p>Ce projet consiste à créer un nouveau système de classement en comparent des profils similaires et non pas des notes moyennes.</p><br /><a href="http://www.facebook.com">White paper</a><br /><p>Mockup</p>');

    }

	else if (page == '/profil') {
	res.write('<h1>Mon Profil</h1>')
}

	

  res.end();

});

server.listen(8080);

console.log('le serveur est actif à l\'adresse: http://127.0.0.1:8080 !')


