var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'MyReview'
});

connection.connect();

connection.query('SELECT * from profils', function(err, rows, fields) {
  if (!err)
    console.log('Le résultat est: ', rows);
  else
    console.log('Error while performing Query.');
});

connection.end();
