import express from 'express';
import * as libroController from '../controllers/libro.controller.js';
import * as v from './verifyToken.js';

const router = express.Router();

router.get('/', v.verifyToken, libroController.getLibros);
router.get('/:id', v.verifyToken, libroController.getLibro);
router.post('/', v.verifyToken, libroController.createLibro);
router.put('/:id', v.verifyToken, libroController.updateLibro);
router.delete('/:id', v.verifyToken, libroController.deleteLibro);

export default router;