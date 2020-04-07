const jp = require('jsonpath');

const Row = require('../models/row.model.js');

module.exports = (req, res, next) => {
  const queryName = req.query.queryname;

  Row.findOne()
    .sort({ date: -1 })
    .then(allResults => {
      const queryresults = jp.query(allResults, '$.rows[?(@.trackingmethod=="trackState")]');
      res.send(queryresults);
    }).catch(err => {
      res.status(500).send({
      message: err.message || "Some error occurred while retrieving rows."
    });
  });
};
