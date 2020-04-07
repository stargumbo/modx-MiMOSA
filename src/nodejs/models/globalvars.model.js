const mongoose = require('mongoose');

const GlobalVarsSchema = mongoose.Schema({
  globalvars: [{
    node: String,
    contextdata: String,
    evar: String,
    definition: String,
    example: String,
    rs: String,
    core: String,
    ga: String,
    olci: String,
    vape: String,
    flexdining: String,
    folio: String,
    captiveportal: String,
    digitalkey: String,
    fun: String,
    chat: String,
    kiosk: String
  }]
}, {
  timestamps: true
});

module.exports = mongoose.model('GlobalVars', GlobalVarsSchema);