const express = require('express');
const app = express();
const usuarioRoutes = require('./src/app/routes/usuario,routes.js');

app.set('port', process.env.PORT || 3000);

app.use(express.json());

app.use('/usuario', usuarioRoutes);

app.listen(app.get('port'), () => {
    console.log('Server on port', app.get('port'));
});