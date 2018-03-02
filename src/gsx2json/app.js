const api = require('./api');
const app = require('express')();
const path = require('path');
const bodyParser = require('body-parser');
const http = require('http').Server(app);
const request = require("request");

const port = process.env.PORT || 8080;

app.use(function(req, res, next) {
  res.header('Access-Control-Allow-Origin', '*');
  res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
  next();
});

// body parser middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// get api
app.get('/api', api);

app.get('/passdatapage', function(req, res) {
    res.sendFile(path.join(__dirname, '/passdatapage/index.html'));
});

app.listen(port, function(){
    console.log('listening on *:3000');
});

// error handler
app.use(function(err, req, res, next) {
    console.error(err.stack);
    res.status(400).send(err.message);
});
/*
app.listen(port, function() {
    console.log('GSX2JSON listening on port ' + port);
});
*/
