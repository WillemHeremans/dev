const MongoClient = require('mongodb').MongoClient;
const assert = require('assert');
const http = require('http');

const server = http.createServer(function(req, res) {

  res.writeHead(200);

  res.end('Salut tout le monde !');

});

// Connection URL
const url = 'mongodb://localhost:27017';

// Database Name
const dbName = 'MonSuperProjet';

// Use connect method to connect to the server
MongoClient.connect(url, function(err, client) {
  assert.equal(null, err);
  console.log("Connexion au server ...... OK");

  const db = client.db(dbName);

  
    findDocuments(db, function() {
      client.close();
    });
  
});

const insertDocuments = function(db, callback) {
  // Get the documents collection
  const collection = db.collection('MaSuperCollectionMongo');
  // Insert some documents
  collection.insertMany([
    {a : 1}, {a : 2}, {a : 3}, {a : "testimonium"}
  ], function(err, result) {
    assert.equal(err, null);
    assert.equal(4, result.result.n);
    assert.equal(4, result.ops.length);
    console.log("4 éléments ont été insérés dans la DB... Be Proud ;-P");
    callback(result);
  });
}

const findDocuments = function(db, callback) {
  // Get the documents collection
  const collection = db.collection('MaSuperCollectionMongo');
  // Find some documents
  collection.find({}).toArray(function(err, docs) {
    assert.equal(err, null);
    console.log("J\'ai trouvé ceci dans ta collection, mec B-)");
    console.log(docs)
    callback(docs);
  });
}

server.listen(8080);
console.log("Le server est lancé sur http://127.0.0.1:8080")
