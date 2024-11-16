import express from 'express';
import dotenv from 'dotenv';
import jwt from 'jsonwebtoken';
import { sequelize } from './src/config/database.js';
import logger from './src/config/log.js';
import libroRoutes from './src/app/routes/libro.route.js';

dotenv.config();

const app = express();
const port = process.env.PORT || 3000;

app.use(express.json());

sequelize.authenticate()
  .then(() => logger.info('Conexión exitosa a la base de datos.'))
  .catch((err) => logger.error('Error al conectar a la base de datos:', err));

app.use('/api/libros', libroRoutes);

// Endpoint para generar tokens
app.post('/generate-token', (req, res) => {
  const { id, isAdmin, isSeller, isBuyer } = req.body;

  if (!id || typeof isAdmin === 'undefined') {
    return res.status(400).json({ message: 'Datos insuficientes para generar el token.' });
  }

  const payload = { id, isAdmin, isSeller, isBuyer };
  const token = jwt.sign(payload, process.env.JWT_SECRET, { expiresIn: '1h' });

  res.json({ token });
});

app.get('/', (req, res) => {
  res.send('Microservicio Libro está funcionando correctamente.');
});

app.listen(port, () => {
  logger.info(`Microservicio Libro corriendo en http://localhost:${port}`);
});
