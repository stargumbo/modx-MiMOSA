const mongoose = require('mongoose');

const TracksSchema = mongoose.Schema({
  tracks: [{
    trackName: String,
    trackValue: String
  }]
}, {
  timestamps: true
});

module.exports = mongoose.model('Tracks', TracksSchema);