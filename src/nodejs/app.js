const api = require('./api');
const dbpull = require('./dbpull');
const aaapi = require('./aaapi');
const app = require('express')();
const path = require('path');
const bodyParser = require('body-parser');

const port = process.env.PORT || 3000;

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

// get dbpull
app.get('/dbpull', dbpull);

// get aa api
app.get('/aaapi', aaapi);

// get formdata test
app.get('/passdatapage', function(req, res) {
    res.sendFile(path.join(__dirname, '/passdatapage/index.html'));
});

// error handler
app.use(function(err, req, res, next) {
    console.error(err.stack);
    res.status(400).send(err.message);
});

app.listen(port, function(){
    console.log('listening on ' + port);
});

