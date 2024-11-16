@php
    use App\Http\Controllers\HabitacionesController;
    $habitaciones = json_decode(HabitacionesController::getHabitaciones());
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitaciones</title>
</head>
<body>
<div class="habitacion">
        @foreach ($habitaciones as $habitacion)
            <div class="habitacion">
                <p>
                    Número de Habitación: {{ $habitacion->numero_habitacion }}
                </p>
                <p>
                    Precio por Noche: {{ $habitacion->precio_por_noche }}
                </p>
                <p>
                    Estado: {{ $habitacion->estado }}
                </p>
                <p>
                    Descripción: {{ $habitacion->descripcion }}
                </p>
                <p>
                    Tipo de Habitación: {{ json_decode(TipoHabitacionController::getTipoHabitacionById($habitacion->tipo_habitacion_id))->nombre }}
                </p>      
            </div>
    </div>
</body>
</html>