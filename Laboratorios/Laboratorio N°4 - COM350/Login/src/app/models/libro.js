import { DataTypes } from 'sequelize';
import { sequelize } from '../../config/database.js';

const Libro = sequelize.define('Libro', {
    id: {
        type: DataTypes.INTEGER,
        primaryKey: true,
        autoIncrement: true
    },
    titulo: {
        type: DataTypes.STRING,
        allowNull: false
    },
    edicion: {
        type: DataTypes.INTEGER,
        allowNull: false
    },
    pais: {
        type: DataTypes.STRING,
        allowNull: false
    },
    editorial_id: {
        type: DataTypes.INTEGER,
        allowNull: false
    }
}, {
    tableName: 'libros',
    timestamps: false
});

export default Libro;
