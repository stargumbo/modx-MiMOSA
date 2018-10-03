const MongoClient = require('mongodb').MongoClient;

module.exports = function(req, res, next) {
  const collectionName = req.query.collectionname,
    dbName = req.query.dbname;

  MongoClient.connect("mongodb://172.18.0.1:27017",(err,client) =>{
    const myAwesomeDB = client.db(dbName);
    const collection = myAwesomeDB.collection(collectionName);

    collection.find({},{limit: 2, sort: {_id: -1}, fields: {_id: 0, columns: 0}}).toArray(function(err, result) {
      res.status(200).json(result)
    });
  });
};


