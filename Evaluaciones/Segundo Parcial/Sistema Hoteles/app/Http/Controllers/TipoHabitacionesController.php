<?php

namespace App\Http\Controllers;

use App\Models\TipoHabitaciones;
use Illuminate\Http\Request;

class TipoHabitacionesController extends Controller
{
    public static function createTipoHabitacion(Request $request) {
        $validate = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required'
        ]);

        $tipo_habitacion = TipoHabitaciones::create($validate);
        return response()->json($tipo_habitacion);
    }

    public static function updateTipoHabitacion(Request $request) {
        $validate = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required'
        ]);

        $tipo_habitacion = TipoHabitaciones::find($request->id);
        $tipo_habitacion->update($validate);
        return response()->json($tipo_habitacion);
    }

    public static function deleteTipoHabitacion(Request $request) {
        $tipo_habitacion = TipoHabitaciones::find($request->id);
        $tipo_habitacion->delete();
        return response()->json($tipo_habitacion);
    }

    public static function getTipoHabitaciones() {
        $tipo_habitaciones = TipoHabitaciones::all();
        return response()->json($tipo_habitaciones);
    }

    public static function getTipoHabitacionById(string $id) {
        $tipo_habitacion = TipoHabitaciones::find($id);
        return response()->json($tipo_habitacion);
    }
}
