var http = require('http');
var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'MyReview'
});

connection.connect();

var server = http.createServer(function(req, res) {

  res.writeHead(200, {"Content-Type": "text/html"});

connection.query('SELECT * from profils', function(err, rows, fields) {
  if (!err)
    console.log('Le résultat est: ', rows);
  else
    console.log('Error while performing Query.');
});

	

  res.end();

});


server.listen(8080);

console.log('le serveur est actif à l\'adresse: http://127.0.0.1:8080 !')
