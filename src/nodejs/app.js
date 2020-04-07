const app = require('express')();
const bodyParser = require('body-parser');
const mongoose = require('mongoose');

// body parser middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

const dbConfig = require('./config/database.config.js');
require('./routes/row.routes.js')(app);
require('./routes/flexapi.routes.js')(app);

const port = process.env.PORT || 3000;

mongoose.Promise = global.Promise;

app.use(function(req, res, next) {
  res.header('Access-Control-Allow-Origin', '*');
  res.header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
  next();
});

// Connecting to the database
mongoose.connect(dbConfig.rccl, {
  useNewUrlParser: true
}).then(() => {
  console.log("Successfully connected to the database");
}).catch(err => {
  console.log('Could not connect to the database. Exiting now...', err);
  process.exit();
});

// error handler
app.use(function(err, req, res, next) {
    console.error(err.stack);
    res.status(400).send(err.message);
});

app.listen(port, () => {
    console.log('listening on ' + port);
});

