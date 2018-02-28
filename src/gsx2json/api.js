const request = require('request');

module.exports = function(req, res, next) {
  const id = req.query.id,
    sheet = req.query.sheet || 1,
    query = req.query.q || '',
    useIntegers = req.query.integers || true,
    showRows = req.query.rows || true,
    showColumns = req.query.columns || true,
    url = 'https://spreadsheets.google.com/feeds/list/' + id + '/' + sheet + '/public/values?alt=json';

  request(url, function(error, response, body) {
    if(!error && response.statusCode === 200) {
      const data = JSON.parse(response.body);
      let responseObj = {};
      let rows = [];
      let columns = {};
      const timestamp = new Date(data.feed.updated['$t']);
      const lastupdated = ((timestamp.getMonth() + 1) + '/' + timestamp.getDate() + '/' +  timestamp.getFullYear());
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
      responseObj['lastupdated'] = lastupdated;

      return res.status(200).json(responseObj);
    } else {
      return res.status(response.statusCode).json(error);
    }
  });
};
