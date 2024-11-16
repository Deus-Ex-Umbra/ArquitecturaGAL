<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function viewCreateLibro()
    {
        return view('libro.create');
    }

    public static function createLibro(Request $request)
    {
        $validate = $request->validate([
            'titulo' => 'required|string|max:255',
            'edicion' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'editorial_id' => 'required|numeric'
        ]);
        Libro::create($validate);
        return redirect()->route('libro.inicio');
    }

    public function viewEditLibro($id)
    {
        $libro = Libro::find($id);
        return view('libro.edit', ['libro' => $libro]);
    }

    public static function editLibro(Request $request, $id)
    {
        $validate = $request->validate([
            'titulo' => 'required|string|max:255',
            'edicion' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'editorial_id' => 'required|numeric'
        ]);
        $libro = Libro::find($id);
        $libro->update($validate);
        return redirect()->route('libro.inicio');
    }

    public static function deleteLibro($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect()->route('libro.inicio');
    }

    public function viewInicioLibro()
    {
        $libros = Libro::all();
        return view('libro.inicio', ['libros' => $libros]);
    }

    public function viewByIdLibro($id)
    {
        $libro = Libro::find($id);
        return view('libro.ver', ['libro' => $libro]);
    }

    public static function getLibroById($id)
    {
        return Libro::find($id);
    }
}
