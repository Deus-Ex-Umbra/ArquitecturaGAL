<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function index()
    {
        $editoriales = Editorial::all();
        return view('editoriales.index', ['editoriales' => $editoriales]);
    }

    public function create()
    {
        return view('editoriales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        Editorial::create($request->all());
        return redirect()->route('editoriales.index')->with('success', 'Editorial creada con éxito');
    }

    public function show(Editorial $_editorial)
    {
        $editorial = Editorial::find($_editorial->id);
        return view('editoriales.show', ['editorial' => $editorial]);
    }

    public function edit(Editorial $editorial)
    {
        return view('editoriales.edit', ['editorial' => $editorial]);
    }

    public function update(Request $request, Editorial $editorial)
    {
        $update = $request->validate([
            'nombre' => 'required'
        ]);

        $editorial->update($update);
        return redirect()->route('editoriales.index')->with('success', 'Editorial actualizada con éxito');
    }

    public function destroy(Editorial $editorial)
    {
        $editorial->delete();
        return redirect()->route('editoriales.index')->with('success', 'Editorial eliminada con éxito');
    }

    public function allByRole($rol) {
        $editoriales = Editorial::all();
        return view('editoriales.index.' + (String)$rol, ['editoriales' => $editoriales]);
    }
}
