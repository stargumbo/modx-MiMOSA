

module.exports = function(req, res, next) {
// Get all available metrics using the Client object
  const Client = require('adobe-analytics').Client,
    c = new Client("tkoscinski@rccl.com:RCCI", "3d79ad14cf921df97ef8940ee94478cd", 'dallas', ''),
    reportData = {"rsid_list": ["rcciexcaliburprod"]};

  c.request('ReportSuite.GetSettings', reportData, function (err, response) {
    if (err) {
      throw new Error(err.message);
    }
    res.status(200).json(response)
    //console.log(response);
  });
};