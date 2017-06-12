var require = meteorInstall({"imports":{"api":{"Players.js":function(require,exports,module){

///////////////////////////////////////////////////////////////////////
//                                                                   //
// imports/api/Players.js                                            //
//                                                                   //
///////////////////////////////////////////////////////////////////////
                                                                     //
module.export({                                                      // 1
  Players: function () {                                             // 1
    return Players;                                                  // 1
  }                                                                  // 1
});                                                                  // 1
var Players = new Mongo.Collection('players');                       // 1
///////////////////////////////////////////////////////////////////////

}}},"server":{"main.js":["meteor/meteor","/imports/api/Players",function(require,exports,module){

///////////////////////////////////////////////////////////////////////
//                                                                   //
// server/main.js                                                    //
//                                                                   //
///////////////////////////////////////////////////////////////////////
                                                                     //
var Meteor = void 0;                                                 // 1
module.importSync("meteor/meteor", {                                 // 1
  Meteor: function (v) {                                             // 1
    Meteor = v;                                                      // 1
  }                                                                  // 1
}, 0);                                                               // 1
var Players = void 0;                                                // 1
module.importSync("/imports/api/Players", {                          // 1
  Players: function (v) {                                            // 1
    Players = v;                                                     // 1
  }                                                                  // 1
}, 1);                                                               // 1
Meteor.startup(function () {// code to run on server at startup      // 4
});                                                                  // 6
///////////////////////////////////////////////////////////////////////

}]}},{"extensions":[".js",".json"]});
require("./server/main.js");
//# sourceMappingURL=app.js.map
