<?php

namespace App\Http\Controllers;

use App\Models\Habitaciones;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function viewAllHabitaciones()
    {
        return view('all_habitacion');
    }

    public function viewCreateHabitacion()
    {
        return view('create_habitacion');
    }

    public function viewUpdateHabitacion(string $id)
    {
        return view('update_habitacion', ['id' => $id]);
    }

    public function viewSearchHabitaciones(string $id)
    {
        return view('search_habitaciones', ['id' => $id]);
    }

    public function createHabitacion(Request $request)
    {
        $validated = $request->validate([
            'numero_habitacion' => 'required|numeric',
            'precio_por_noche' => 'required|numeric',
            'estado' => 'required|string',
            'descripcion' => 'required|string',
            'id_tipo_habitacion' => 'required|exists:tipo_habitaciones,id'
        ]);
        
        $habitacion = Habitaciones::create([
            'numero_habitacion' => $validated['numero_habitacion'],
            'precio_por_noche' => $validated['precio_por_noche'],
            'estado' => $validated['estado'],
            'descripcion' => $validated['descripcion'],
            'id_tipo_habitacion' => $validated['id_tipo_habitacion']
        ]);

        return response()->json(['success' => true, 'habitacion' => $habitacion], 201);
    }

    public function updateHabitacion(Request $request)
    {
        // Validación de los datos
        $validated = $request->validate([
            'id' => 'required|exists:habitaciones,id',
            'numero_habitacion' => 'required|numeric',
            'precio_por_noche' => 'required|numeric',
            'estado' => 'required|string',
            'descripcion' => 'required|string',
            'id_tipo_habitacion' => 'required|exists:tipo_habitaciones,id'
        ]);
        $habitacion = Habitaciones::findOrFail($validated['id']);
        $habitacion->update([
            'numero_habitacion' => $validated['numero_habitacion'],
            'precio_por_noche' => $validated['precio_por_noche'],
            'estado' => $validated['estado'],
            'descripcion' => $validated['descripcion'],
            'id_tipo_habitacion' => $validated['id_tipo_habitacion']
        ]);

        return response()->json(['success' => true, 'habitacion' => $habitacion]);
    }

    public function deleteHabitacion(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:habitaciones,id'
        ]);
        $habitacion = Habitaciones::findOrFail($request->id);
        $habitacion->delete();

        return response()->json(['success' => true, 'message' => 'Habitación eliminada correctamente.']);
    }

    public function getHabitaciones()
    {
        $habitaciones = Habitaciones::all();
        return response()->json($habitaciones);
    }

    public function getHabitacionById(string $id)
    {
        $habitacion = Habitaciones::findOrFail($id);
        return response()->json($habitacion);
    }

    public function getHabitacionByTipoHabitacion(Request $request)
    {
        $id = $request->input('tipo');
        $habitaciones = Habitaciones::where('tipo_habitacion_id', $id)->get();
        return response()->json($habitaciones);
    }

    public function getHabitacionByNumeroAndPiso(string $numero, string $piso)
    {
        $habitaciones = Habitaciones::where('numero_habitacion', $numero)
            ->where('piso', $piso)
            ->get();

        return response()->json($habitaciones);
    }
}
