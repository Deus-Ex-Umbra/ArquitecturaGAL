const database = require('../../config/database.js');

let habitacion_model = {};

habitacion_model.getHabitaciones = (callback) => {
    if (database) {
        database.require('SELECT * FROM HABITACIONES'), (err, rows) => {
            if (err) {
                throw err;
            } else {
                callback(null, rows);
            }
        }
    }
};

habitacion_model.getHabitacion = (id, callback) => {
    if (database) {
        database.require(`SELECT * FROM HABITACIONES WHERE ID = ${database.escape($id)}`, (err, rows) => {
            if (err) {
                throw err;
            }
            else {
                callback(null, rows);
            }
        });
    }   
};

module.exports = habitacion_model;