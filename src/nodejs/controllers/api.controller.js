const request = require('request');

const Generic = require('../models/generic.model');
const GlobalVars = require('../models/globalvars.model');
const Tracks = require('../models/tracks.model');

module.exports = (req, res, next) => {
  const id = req.query.id,
    sheet = req.query.sheet || 1,
    query = req.query.q || '',
    useIntegers = req.query.integers || true,
    showRows = req.query.rows || true,
    showColumns = req.query.columns || true,
    sendData = req.query.senddata || true,
    model = req.query.model || true,

    url = 'https://spreadsheets.google.com/feeds/list/' + id + '/' + sheet + '/public/values?alt=json';


  request(url, function(error, response, body) {
    if(!error && response.statusCode === 200) {
      const data = JSON.parse(response.body);
      let responseObj = {};
      let rows = [];
      let columns = {};
      const timestamp = new Date(data.feed.updated['$t']);
      const lastupdated = ((timestamp.getMonth() + 1) + '/' + timestamp.getDate() + '/' +  timestamp.getFullYear() + ' - ' + timestamp.getHours() + ':' + (timestamp.getMinutes()<10?'0':'') + timestamp.getMinutes());
      for(let i = 0; i < data.feed.entry.length; i++) {
        const entry = data.feed.entry[i];
        const keys = Object.keys(entry);
        let newRow = {};
        let queried = false;
        for(let j = 0; j < keys.length; j++) {
          const gsxCheck = keys[j].indexOf('gsx$');
          if(gsxCheck > -1) {
            const key = keys[j];
            const name = key.substring(4);
            const content = entry[key];
            let value = content.$t;
            if(value.toLowerCase().indexOf(query.toLowerCase()) > -1) {
              queried = true;
            }
            if(useIntegers === true && !isNaN(value)) {
              value = Number(value);
            }
            newRow[name] = value;
            if(queried === true) {
              if(!columns.hasOwnProperty(name)) {
                columns[name] = [];
                columns[name].push(value);
              } else {
                columns[name].push(value);
              }
            }
          }
        }
        if(queried === true) {
          rows.push(newRow);
        }
      }
      if(showColumns === true) {
        responseObj['columns'] = columns;
      }
      if(showRows === true) {
        responseObj['rows'] = rows;
      }

      // Send data to mongodb if QP sendit is in
      if(sendData === 'sendit') {
          // Create a Row
        let populateData = new Generic({
          rows: responseObj.rows || "Empty Query"
        });

        if (model === 'globalvars'){
          populateData = new GlobalVars({
            rows: responseObj.rows || "Empty Query"
          });
        }

        if (model === 'tracks') {
          populateData = new Tracks({
            rows: responseObj.rows || "Empty Query"
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

      responseObj['lastupdated'] = lastupdated;
      return res.status(200).json(responseObj);

    } else {
      return res.status(response.statusCode).json(error);
    }
  });
};

