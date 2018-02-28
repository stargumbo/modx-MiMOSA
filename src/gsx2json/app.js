const api = require('./api');
const passdataQuery = require('./passdataQuery');
const app = require('express')();
const path = require('path');
const bodyParser = require('body-parser');
const http = require('http').Server(app);
const request = require("request");
const streamToMongoDB = require("stream-to-mongo-db").streamToMongoDB;
const JSONStream = require("JSONStream");

var port = process.env.PORT || 8080;

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

// get passdata
app.get('/passdataQuery', passdataQuery);

// get passdata
app.get('/passdata', function(req, res) {

    let dbName = req.query['dbNamePass'];
    let spreadsheetId = req.query['spreadsheetIdPass'];
    let dbCollection = req.query['dbCollectionPass'];

    // where the data will end up
    let outputDBConfig = { dbURL : "mongodb://172.17.0.1:27017/" + dbName, collection : dbCollection };

    // create the writable stream
    const writableStream = streamToMongoDB(outputDBConfig);

    // Insert JSON straight into MongoDB
    request("http://172.17.0.1:3000/api?id="+ spreadsheetId + "&sheet=1")
        .pipe(JSONStream.parse('rows.*'))
        .pipe(writableStream);
});

app.get('/passdatapage', function(req, res) {
    res.sendFile(path.join(__dirname, '/passdatapage/index.html'));
});


app.listen(port, function(){
    console.log('listening on *:3000');
});

// MongoClient Connect
/*

var dburl = 'mongodb://172.17.0.1:27017/node-demo';

MongoClient.connect(dburl, function (err, database) {
    if (err)
        throw err;
    else
    {
        db = database;
        console.log('Connected to MongoDB');
        //Start app only after connection is ready
        //app.listen(3000);
    }
});

app.get('/mongopath', function(req, res) {
    res.sendFile(path.join(__dirname, '/mongopath/index.html'));
});

app.post('/', function(req, res) {
    // Insert JSON straight into MongoDB
    db.collection('ontology').insert(req.body, function (err, result) {
        if (err)
            res.send('Error');
        else
            res.send('Success');
    });
});





app.get('/sockettest', function(req, res) {
    res.sendFile(path.join(__dirname, '/sockettest/index.html'));
});




app.use("/tester", (req, res) => {
    res.sendFile(__dirname + "/tester/index.html");
});

mongoose.Promise = global.Promise;
mongoose.connect("mongodb://172.17.0.1:27017/node-demo");

const nameSchema = new mongoose.Schema({
    firstName: String,
    lastName: String
});
const User = mongoose.model("User", nameSchema);

app.post("/addname", (req, res) => {
    const myData = new User(req.body);
    myData.save()
        .then(item => {
            res.send("item saved to database");
        })
        .catch(err => {
            res.status(400).send("unable to save to database");
        });
});
*/
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
