const fetch = require('node-fetch');

const Row = require('../models/row.model');
const GlobalVars = require('../models/globalvars.model');
const Tracks = require('../models/tracks.model');

module.exports = (req, res, next) => {
  const API = 'https://sheets.googleapis.com/v4/spreadsheets/1t20CCWQKDMqWn1kDihvvyBlTGxsX-2JvYr8N2y9FGMw/values:batchGet?ranges=tracks&majorDimension=ROWS&key=AIzaSyArp8PlAv1IKdQ-x4h4hc43skOK5RwWTA0'

  fetch(API).then(response => response.json()).then(data => {
    let batchRowValues = data.valueRanges[0].values;

    const rows = [];
    for (let i = 1; i < batchRowValues.length; i++) {
      let rowObject = {};
      for (let j = 0; j < batchRowValues[i].length; j++) {
        rowObject[batchRowValues[0][j]] = batchRowValues[i][j];
      }
      rows.push(rowObject);
    }

    res.status(200).json(rows);
  });
};

