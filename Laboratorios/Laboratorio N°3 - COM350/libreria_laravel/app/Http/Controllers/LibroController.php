<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', ['libros' => $libros]);   
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'editorial' => 'required',
            'paginas' => 'required',
            'precio' => 'required'
        ]);

        Libro::create($request->all());
        return redirect()->route('libros.index')->with('success', 'Libro creado con éxito');
    }

    public function show(Libro $libro)
    {
        $libro = Libro::find($libro->id);
        return view('libros.show', ['libro' => $libro]);
    }

    public function edit(Libro $libro)
    {
        return view('libros.edit', ['libro' => $libro]);
    }

    public function update(Request $request, Libro $libro)
    {
        $update = $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'editorial' => 'required',
            'paginas' => 'required',
            'precio' => 'required'
        ]);

        $libro->update($update);
        return redirect()->route('libros.index')->with('success', 'Libro actualizado con éxito');   
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index')->with('success', 'Libro eliminado con éxito');
    }
}
