const express = require('express');
const app = express();
const port = 8080;

app.get('/index', (req, res) => {
    res.send('Route vers index.js');
});

app.get('/app/public/', (req, res) => {
    res.send('Route vers le dossier public');
});

app.get('/app/views/index', (req, res) => {
    res.send('Route vers index.html');
});
