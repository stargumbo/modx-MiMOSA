var api = require('./api');
var mongoose = require("mongoose");
var express = require('express');
var path = require('path');
var bodyParser = require('body-parser');

var app = express();

var port = process.env.PORT || 5000;

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

// get hello world!
app.use("/tester", (req, res) => {
    res.sendFile(__dirname + "/tester/index.html");
});

// Mongodb connect
mongoose.Promise = global.Promise;
mongoose.connect("mongodb://172.17.0.1:27017/node-demo");

var nameSchema = new mongoose.Schema({
    firstName: String,
    lastName: String
});
var User = mongoose.model("User", nameSchema);

app.post("/addname", (req, res) => {
    var myData = new User(req.body);
    myData.save()
        .then(item => {
            res.send("item saved to database");
        })
        .catch(err => {
            res.status(400).send("unable to save to database");
        });
});

// error handler
app.use(function(err, req, res, next) {
  console.error(err.stack);
  res.status(400).send(err.message);
});

app.listen(port, function() {
  console.log('GSX2JSON listening on port ' + port);
});
