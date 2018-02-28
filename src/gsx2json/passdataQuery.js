const request = require("request");
const streamToMongoDB = require("stream-to-mongo-db").streamToMongoDB;
const JSONStream = require("JSONStream");



module.exports = function(req, res, next) {
    const id = req.query.id,
        sheet = req.query.sheet || 1,
        dbName = req.query.dbName || '',
        dbCollection = req.query.dbCollection || '',
        url = 'https://spreadsheets.google.com/feeds/list/' + id + '/' + sheet + '/public/values?alt=json',
        outputDBConfig = { dbURL : "mongodb://172.17.0.1:27017/" + dbName, collection : dbCollection },
        writableStream = streamToMongoDB(outputDBConfig);

    request(url, function(error, response, body) {
        if(!error && response.statusCode === 200) {
            // Insert JSON straight into MongoDB
            request("http://172.17.0.1:3000/api?id=" + id + "&sheet=1")
                .pipe(JSONStream.parse('rows.*'))
                .pipe(writableStream);
        }
        console.log("WOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO");
    });
    //console.log(error);

};
