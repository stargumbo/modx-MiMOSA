const rows = require('../controllers/row.controller.js');

module.exports = (app) => {

  // Create a new Note
  app.post('/rows', rows.create);

  // Retrieve all Notes
  app.get('/rows', rows.findAll);

  // Retrieve a single Row with rowsId
  app.get('/rows/:rowId', rows.findOne);

  // Update a Note with rowsId
  app.put('/rows/:rowId', rows.update);

  // Delete a Note with rowsId
  app.delete('/rows/:rowId', rows.delete);
};