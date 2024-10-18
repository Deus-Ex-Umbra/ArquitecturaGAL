<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería - Editoriales</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 2rem;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        .header {
            margin-bottom: 2rem;
            text-align: right;
        }
        .header button {
            padding: 0.75rem 1.5rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .header button:hover {
            background-color: #45a049;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }
        .card-buttons {
            display: flex;
            justify-content: space-around;
        }
        .card-buttons a, .card-buttons button {
            padding: 0.5rem 1rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.875rem;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .card-buttons a:hover, .card-buttons button:hover {
            background-color: #0056b3;
        }
        .card-buttons button {
            background-color: #FF5733;
        }
        .card-buttons button:hover {
            background-color: #C70039;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <button>
                <a href="{{ route('editoriales.create') }}" style="color: white; text-decoration: none;">Agregar Editorial</a>
            </button>
        </div>
        <div class="card-grid">
            @foreach($editoriales as $editorial)
            <div class="card">
                <!-- Nombre de la editorial como enlace -->
                <div class="card-title">
                    {{ $editorial->name }}
                </div>

                <!-- Botones de acción -->
                <div class="card-buttons">
                    <a href="{{ route('libros.show', $editorial->id) }}">Mostrar Libros</a>
                    <a href="{{ route('editoriales.edit', $editorial->id) }}">Editar</a>
                    <form action="{{ route('editoriales.destroy', $editorial->id) }}" method="post" style="display:inline;">
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
