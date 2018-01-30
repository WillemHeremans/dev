var fs = require('fs');
var file = fs.readFileSync(process.argv[2], 'utf8').split('\n').length - 1;

console.log(file);



// autre version plus longue:
//var fs = require('fs');
//var file = fs.readFileSync(process.argv[2]);
//var arr=file.toString().split('\n');
//console.log(arr.length - 1);
