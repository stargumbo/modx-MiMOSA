const Generic = require('../models/generic.model');

// Create and Save a new Row
exports.create = (req, res) => {
  // Validate request
  if(!req.body.content) {
    return res.status(400).send({
      message: "Row content can not be empty"
    });
  }

  // Create a Row
  const row = new Generic({
    title: req.body.title || "Untitled Row",
    content: req.body.content
  });

  // Save Row in the database
  row.save()
    .then(data => {
      res.send(data);
    }).catch(err => {
    res.status(500).send({
      message: err.message || "Some error occurred while creating the Row."
    });
  });
};

// Retrieve and return all rows from the database.
exports.findAll = (req, res) => {
  Generic.find()
    .then(rows => {
      res.send(rows);
    }).catch(err => {
    res.status(500).send({
      message: err.message || "Some error occurred while retrieving rows."
    });
  });
};

// Find a single row with a rowId
exports.findOne = (req, res) => {
  Generic.findById(req.params.rowId)
    .then(row => {
      if(!row) {
        return res.status(404).send({
          message: "Row not found with id " + req.params.rowId
        });
      }
      res.send(row);
    }).catch(err => {
    if(err.kind === 'ObjectId') {
      return res.status(404).send({
        message: "Row not found with id " + req.params.rowId
      });
    }
    return res.status(500).send({
      message: "Error retrieving row with id " + req.params.rowId
    });
  });
};

// Update a row identified by the rowId in the request
exports.update = (req, res) => {
  // Validate Request
  if(!req.body.content) {
    return res.status(400).send({
      message: "row content can not be empty"
    });
  }

  // Find row and update it with the request body
  row.findByIdAndUpdate(req.params.rowId, {
    title: req.body.title || "Untitled row",
    content: req.body.content
  }, {new: true})
    .then(row => {
      if(!row) {
        return res.status(404).send({
          message: "row not found with id " + req.params.rowId
        });
      }
      res.send(row);
    }).catch(err => {
    if(err.kind === 'ObjectId') {
      return res.status(404).send({
        message: "row not found with id " + req.params.rowId
      });
    }
    return res.status(500).send({
      message: "Error updating row with id " + req.params.rowId
    });
  });
};

// Delete a row with the specified rowId in the request
exports.delete = (req, res) => {
  Generic.findByIdAndRemove(req.params.rowId)
    .then(row => {
      if(!row) {
        return res.status(404).send({
          message: "Row not found with id " + req.params.rowId
        });
      }
      res.send({message: "Row deleted successfully!"});
    }).catch(err => {
    if(err.kind === 'ObjectId' || err.name === 'NotFound') {
      return res.status(404).send({
        message: "Row not found with id " + req.params.rowId
      });
    }
    return res.status(500).send({
      message: "Could not delete row with id " + req.params.rowId
    });
  });
};