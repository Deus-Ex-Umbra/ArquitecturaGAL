const mysql = require('mysql2');

let pool = mysql.createPool({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'bd_hotel'
});

exports.pool = pool;