const mongoose = require('mongoose');
const Schema = mongoose.Schema;

module.exports = function(req, res, next) {

  mongoose.connect('mongodb://172.18.0.1:27017/RCCL');

  const itemSchema = new Schema({ url: String, text: String, id: Number},
    { collection : 'question' });


  mongoose.model('rows', new Schema({ lastupdated: String }), 'SpeecData');

  const rows = mongoose.model('rows');
  rows.find({}, function(err, data) {
    res.status(200).json(data);
  });

};
