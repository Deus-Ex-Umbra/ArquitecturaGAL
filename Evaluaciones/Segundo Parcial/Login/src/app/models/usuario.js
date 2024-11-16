const database = require('../../config/database.js').pool;
var jwt = require('jsonwebtoken');

let usuario_model = {};

usuario_model.getUsuarios = (callback) => {
    if (database) {
        database.query('SELECT * FROM usuarios', (error, results) => {
            if (error) {
                throw error;
            } else {
                callback(null, results);
            }
        });
    }
};

usuario_model.getUsuario = (id, callback) => {
    if (database) {
        const sql = `SELECT * FROM usuarios WHERE id = ${database.escape(id)}`;
        database.query(sql, (error, result) => {
            if (error) {
                throw error;
            } else {
                callback(null, result);
            }
        });
    }
};

usuario_model.login = (usuario, callback) => {
    if (database) {
        const sql = `SELECT * FROM usuarios WHERE email = ${database.escape(usuario.email)}`;
        database.query(sql, (error, result) => {
            if (error) {
                throw error;
            } else {
                if (result.length > 0) {
                    if (usuario.password === result[0].password) {
                        var token = jwt.sign({ id: result[0].id, email: result[0].email }, 'deus', {
                            expiresIn: 86400
                        });
                        callback(null, { auth: true, token: token });
                    } else {
                        callback(null, { auth: false, token: null });
                    }
                } else {
                    callback(null, { auth: false, token: null });
                }
            }
        });
    }
};

module.exports = usuario_model;
