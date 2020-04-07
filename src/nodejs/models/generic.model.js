const mongoose = require('mongoose');

const GenericSchema = mongoose.Schema({
  rows: Object
}, {
  timestamps: true
});

module.exports = mongoose.model('Rows', GenericSchema);