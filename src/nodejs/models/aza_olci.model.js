const mongoose = require('mongoose');

const azaOlciSchema = mongoose.Schema({
  aza_olci: [{
    pageName: String,
    trackingdescription: String,
    trackingmethod: String,
    trackingmethodaction: String,
    trackingimage: String,
    process: String,
    siteSection: String,
    siteType: String,
    country: String,
    language: String,
    fieldList: String,
    ship : String,
    shipCode : String,
    shipDate: String,
    shipTime: String,
    voyageID: String,
    brand : String,
    vdsID : String,
    loyaltyNum: String,
    bookingID : String,
    aamid: String,
    visitType: String,
    departureDate: String,
    bookingDesc: String,
    daysToCruise: String,
    cruiseLength: String,
    bookingCruiseType: String,
    destination: String,
    loginStatus: String,
    domain: String,
    passengerID : String,
    interaction : String,
    alertMsg: String,
    associatedReservations: String,
    associatedGuests: String,
    associatedGuestsCheckingIn: String,
    associatedGuestsCheckedIn: String,
    reservationGuests: String,
    reservationGuestsCheckingIn: String,
    reservationGuestsCheckedIn: String,
    totalGuests: String,
    totalGuestsCheckedIn: String,
    domTitle: String,
    eventType: String
  }]
}, {
  timestamps: true
});

module.exports = mongoose.model('AZA_OLCI', azaOlciSchema);


