const api = require('../controllers/api.controller');
const aaapi = require('../controllers/aaapi.controller');
const specdata = require('../controllers/specdata.controller');
const flexapi = require('../controllers/flexapi.controller');

module.exports = (app) => {

  // get base url
  app.get("/", (req, res) => {
    res.send("Boom");
  });

  // get all rows
  app.get('/dbpull', flexapi.allGeneric);

  // get all Global Variables
  app.get('/globalVars', flexapi.allGlobalVars);

  // get all Tracks
  app.get('/tracks', flexapi.allTracks);

  // push data to mongo
  app.get('/apiV4/:sheetId/:sheetName/:sendit', flexapi.apiV4);

  // get filtered rows
  app.get('/rowFilter/:filterParam/:filterValue', flexapi.rowFilterParameters);

  // get filtered Global Variables
  app.get('/globalVars/:filterParam/:filterValue', flexapi.filterGlobalVars);

  // get AZA OLCI Data Layer
  app.get('/azaolcidatalayer', flexapi.azaOlci);

  // get AZA OLCI Data Layer
  app.get('/azaolcidatalayer/:filterParam/:filterValue', flexapi.azaOlciFilterParameters);

  // get api
  app.get('/api', api);

  // get AA api
  app.get('/aaapi', aaapi);

  // Mongoose RCCL spec table
  app.get('/specdata', specdata);

};