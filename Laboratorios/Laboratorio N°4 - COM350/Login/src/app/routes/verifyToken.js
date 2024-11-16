import jwt from 'jsonwebtoken';
import dotenv from 'dotenv';

dotenv.config(); // Carga las variables de entorno desde el archivo .env

export function verifyToken(req, res, next) {
    const authHeader = req.headers['authorization'];
    if (!authHeader) {
        return res.status(403).send({
            auth: false,
            message: 'No se ha proporcionado un token'
        });
    }

    const token = authHeader.startsWith('Bearer ') ? authHeader.slice(7) : authHeader;

    jwt.verify(token, process.env.JWT_SECRET, (err, decoded) => {
        if (err) {
            return res.status(401).send({
                auth: false,
                message: 'Acceso no autorizado'
            });
        }
        req.userId = decoded.id;

        next();
    });
}
