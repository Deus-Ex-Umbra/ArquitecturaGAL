@php
    use App\Models\TipoHabitaciones;
    $tipo_habitaciones = TipoHabitaciones::all();
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
</head>
<body>
    <div>
        <a href="{{ route('habitaciones.index') }}">
            <button>Mostrar Todas las Habitaciones</button>
        </a>
    </div>
    
    <form action="{{ route('habitaciones.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            Crear Habitación
        </div>
        <div>
            <label for="numero_habitacion">Número de Habitación:</label>
            <input type="number" name="numero_habitacion" id="numero_habitacion" required>
        </div>
        <div>
            <label for="precio_por_noche">Precio por Noche:</label>
            <input type="number" name="precio_por_noche" id="precio_por_noche" required>
        </div>
        <div>
            <label for="estado">Estado:</label>
            <input type="text" name="estado" id="estado" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" required></textarea>
        </div>
        <div>
            <label for="id_tipo_habitacion">Tipo de Habitación:</label>
            <select name="id_tipo_habitacion" id="id_tipo_habitacion" required>
                @foreach ($tipo_habitaciones as $tipo_habitacion)
                    <option value="{{ $tipo_habitacion->id }}">{{ $tipo_habitacion->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Crear Habitación</button>
        </div>
    </form>

    <form action="{{ route('habitaciones.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            Editar Habitación
        </div>
        <div>
            <label for="id">ID de Habitación:</label>
            <input type="number" name="id" id="id" required>
        </div>
        <div>
            <label for="numero_habitacion_edit">Número de Habitación:</label>
            <input type="number" name="numero_habitacion" id="numero_habitacion_edit" required>
        </div>
        <div>
            <label for="precio_por_noche_edit">Precio por Noche:</label>
            <input type="number" name="precio_por_noche" id="precio_por_noche_edit" required>
        </div>
        <div>
            <label for="estado_edit">Estado:</label>
            <input type="text" name="estado" id="estado_edit" required>
        </div>
        <div>
            <label for="descripcion_edit">Descripción:</label>
            <textarea name="descripcion" id="descripcion_edit" required></textarea>
        </div>
        <div>
            <label for="id_tipo_habitacion_edit">Tipo de Habitación:</label>
            <select name="id_tipo_habitacion" id="id_tipo_habitacion_edit" required>
                @foreach ($tipo_habitaciones as $tipo_habitacion)
                    <option value="{{ $tipo_habitacion->id }}">{{ $tipo_habitacion->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Editar Habitación</button>
        </div>
    </form>

    <form action="{{ route('habitaciones.search') }}" method="POST"> @csrf <div> <label for="tipo">Tipo de Habitación:</label> <select name="tipo" id="tipo"> @foreach ($tipo_habitaciones as $tipo_habitacion) <option value="{{ $tipo_habitacion->id }}">{{ $tipo_habitacion->nombre }}</option> @endforeach </select> </div> <div> <button type="submit">Buscar Habitaciones</button> </div> </form>
</body>
</html>
