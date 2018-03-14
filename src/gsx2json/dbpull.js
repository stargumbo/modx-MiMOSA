const MongoClient = require('mongodb').MongoClient;

module.exports = function(req, res, next) {
    const collectionName = req.query.collectionname,
        dbName = req.query.dbname;

    MongoClient.connect("mongodb://172.17.0.1:27017",(err,client) =>{
        const myAwesomeDB = client.db(dbName);
        const collection = myAwesomeDB.collection(collectionName);

        collection.find({},{limit: 1, sort: {_id: -1}, fields: {_id: 0, columns: 0}}).toArray(function(err, result) {
            res.status(200).json(result)
        });
    });
};






/*
 const monk = require('monk');

 module.exports = function(req, res, next) {
     const collectionName = req.query.collectionname,
     dbName = req.query.dbname;

     const db = monk('mongodb://172.17.0.1:27017/' + dbName);
     const collection = db.get(collectionName);

     collection.find({}, {limit: 1, sort: {_id: -1}, fields: {_id: 0, columns: 0}}).then((docs) => {
        res.json(docs)
     });
 };
*/