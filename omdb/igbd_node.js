var request = require("request");

var options = { method: 'GET',
  url: 'https://api-endpoint.igdb.com/games/',
  qs: { search: 'fifa', fields: '*' },
  headers: 
   { 'Postman-Token': '2f2abaee-faf7-5bcd-7a20-28f068c27ef4',
     'Cache-Control': 'no-cache',
     Accept: 'application/json',
     'user-key': '06206e20b60580e091e3ec2118187bdf' } };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});
