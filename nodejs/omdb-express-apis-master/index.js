var express = require('express');
var app = express();

// this adds some logging to each request
app.use(require('morgan')('dev'));

app.get('/', function(req, res) {
    res.send('Hello Backend!');
});

var server = app.listen(process.env.PORT || 3000);

module.exports = server;

console.log("le serveur est lancé sur http://127.0.0.1:3000/")
