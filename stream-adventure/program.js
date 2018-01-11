var fs = require('fs');
var file = process.argv[2];

    fs.createReadStream(file).pipe(process.stdout);
    fs.createReadStream(file).process.stdin.pipe(process.stdout);
