const router = require('express').Router();
const Usuario = require('../models/usuario.js');
const jwt = require('jsonwebtoken');

router.get('/', (req, res) => {
    Usuario.getUsuarios((err, data) => {
        res.status(200).json(data);
    });
});

router.get('/:id', (req, res) => {
    Usuario.getUsuario(req.params.id, (err, data) => {
        res.status(200).json(data);
    });
});

router.post('/', (req, res) => {
    Usuario.login(req.body, (err, data) => {
        res.status(200).json(data);
    });
});

module.exports = router;