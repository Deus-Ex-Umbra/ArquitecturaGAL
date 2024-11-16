import Libro from '../models/libro.js';

export const getLibros = async (req, res) => {
    try {
        const libros = await Libro.findAll();
        res.json(libros);
    } catch (error) {
        res.status(500).json({
            message: 'Error al intentar obtener los libros'
        });
    }
};

export const getLibro = async (req, res) => {
    try {
        const libro = await Libro.findByPk(req.params.id);
        if (libro) {
            res.json(libro);
        } else {
            res.status(404).json({
                message: 'Libro no encontrado'
            });
        }
    } catch (error) {
        res.status(500).json({
            message: 'Error al intentar obtener el libro'
        });
    }
};

export const createLibro = async (req, res) => {
    try {
        const libro = await Libro.create(req.body);
        res.status(201).json(libro);
    } catch (error) {
        res.status(500).json({
            message: 'Error al intentar crear el libro'
        });
    }
};

export const updateLibro = async (req, res) => {
    try {
        const libro = await Libro.findByPk(req.params.id);
        if (libro) {
            await libro.update(req.body);
            res.json(libro);
        } else {
            res.status(404).json({
                message: 'Libro no encontrado'
            });
        }
    } catch (error) {
        res.status(500).json({
            message: 'Error al intentar actualizar el libro'
        });
    }
};

export const deleteLibro = async (req, res) => {
    try {
        const libro = await Libro.findByPk(req.params.id);
        if (libro) {
            await libro.destroy();
            res.json({
                message: 'Libro eliminado'
            });
        } else {
            res.status(404).json({
                message: 'Libro no encontrado'
            });
        }
    } catch (error) {
        res.status(500).json({
            message: 'Error al intentar eliminar el libro'
        });
    }
};
