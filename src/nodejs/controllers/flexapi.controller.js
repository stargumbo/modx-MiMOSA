const jp = require('jsonpath');
const fetch = require('node-fetch');

const Generic = require('../models/generic.model');
const GlobalVars = require('../models/globalvars.model');
const Tracks = require('../models/tracks.model');
const AZA_OLCI = require('../models/aza_olci.model');

// Return All Rows
exports.allGeneric = (req, res) => {
  Generic.findOne()
    .sort({ _id: -1 })
    .then(allResults => {
      res.send(allResults);
    }).catch(err => {
    res.status(500).send({
      message: err.message || "Some error occurred while retrieving Row."
    });
  });
};

// Return All Tracks
exports.allTracks = (req, res) => {
  Tracks.findOne()
    .sort({ _id: -1 })
    .then(allResults => {
      res.send(allResults.tracks);
    }).catch(err => {
    res.status(500).send({
      message: err.message || "Some error occurred while retrieving Tracks."
    });
  });
};


// Return All Global Vars
exports.allGlobalVars = (req, res) => {
  GlobalVars.findOne()
    .sort({ _id: -1 })
    .then(allResults => {
      res.send(allResults.globalvars);
    }).catch(err => {
    res.status(500).send({
      message: err.message || "Some error occurred while retrieving Row."
    });
  });
};

// Filter by rows parameter and value
exports.rowFilterParameters = (req, res) => {
  Generic.findOne()
    .sort({ _id: -1 })
    .then(allResults => {
      const queryresults = jp.query(allResults, '$.rows[?(@.' + req.params.filterParam + '=="' + req.params.filterValue + '")]');
      res.send(queryresults);
    }).catch(err => {
    res.status(500).send({
      message: err.message || "Some error occurred while retrieving Row."
    });
  });
};

// Filter by rows parameter and value
exports.filterGlobalVars = (req, res) => {
  GlobalVars.findOne()
    .sort({ _id: -1 })
    .then(allResults => {
      const queryresults = jp.query(allResults, '$.globalvars[?(@.' + req.params.filterParam + '=="' + req.params.filterValue + '")]');
      res.send(queryresults);
    }).catch(err => {
    res.status(500).send({
      message: err.message || "Some error occurred while retrieving GlobalVars."
    });
  });
};

// Return All Tracks
exports.azaOlci = (req, res) => {
  AZA_OLCI.findOne()
    .sort({ _id: -1 })
    .then(allResults => {
      res.send(allResults.aza_olci);
    }).catch(err => {
    res.status(500).send({
      message: err.message || "Some error occurred while retrieving Tracks."
    });
  });
};

// Filter by rows parameter and value
exports.azaOlciFilterParameters = (req, res) => {
  AZA_OLCI.findOne()
    .sort({ _id: -1 })
    .then(allResults => {
      const queryresults = jp.query(allResults, '$.aza_olci[?(@.' + req.params.filterParam + '=="' + req.params.filterValue + '")]');
      res.send(queryresults);
    }).catch(err => {
    res.status(500).send({
      message: err.message || "Some error occurred while retrieving Row."
    });
  });
};



// Populate data from google sheets
exports.apiV4 = (req, res) => {
  const generalDataSheet = '1t20CCWQKDMqWn1kDihvvyBlTGxsX-2JvYr8N2y9FGMw';
  const sheetAZAOlci = '17_JQp1wkxa39EK6tI0mOScYlecw6-R9GCe062Yv3FGU';
  const URLsheetId = req.params.sheetId;
  const URLsheetName = req.params.sheetName;
  const URLsendit = req.params.sendit;

  let sheetAPIid;

  if (URLsheetId === 'generalData'){
    sheetAPIid = generalDataSheet;
  }

  if (URLsheetId === 'azaolci'){
    sheetAPIid = sheetAZAOlci;
  }

  const API = 'https://sheets.googleapis.com/v4/spreadsheets/' + sheetAPIid + '/values:batchGet?ranges=' + URLsheetName + '&majorDimension=ROWS&key=AIzaSyArp8PlAv1IKdQ-x4h4hc43skOK5RwWTA0'

  fetch(API).then(response => response.json()).then(data => {
    let batchRowValues = data.valueRanges[0].values;

    const dataRows = [];
    for (let i = 1; i < batchRowValues.length; i++) {
      let rowObject = {};
      for (let j = 0; j < batchRowValues[i].length; j++) {
        rowObject[batchRowValues[0][j]] = batchRowValues[i][j];
      }
      dataRows.push(rowObject);
    }

    // Send data to mongodb if QP sendit is in
    if(URLsheetId != null && URLsheetName !=null && URLsendit === 'sendit') {
      // Create a Row
      let populateData = new Generic({
        rows: dataRows || "Empty Query"
      });

      if (URLsheetId === 'generalData' && URLsheetName === 'globalVariables'){
        populateData = new GlobalVars({
          globalvars: dataRows || "Empty Query"
        });
      }

      if (URLsheetId === 'generalData' && URLsheetName === 'tracks') {
        populateData = new Tracks({
          tracks: dataRows || "Empty Query"
        });
      }

      if (URLsheetId === 'azaolci' && URLsheetName === 'dataModel') {
        populateData = new AZA_OLCI({
          aza_olci: dataRows || "Empty Query"
        });
      }

      populateData.save()
        .then(data => {
          res.send(data);
        }).catch(err => {
        res.status(500).send({
          message: err.message || "Some error occurred while creating the Row."
        });
      });
    }
    res.status(200).json(dataRows);
  });
};


