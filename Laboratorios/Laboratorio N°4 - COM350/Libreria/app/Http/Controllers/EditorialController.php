<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;
use App\Models\Libro;

class EditorialController extends Controller
{
    public function viewCreateEditorial()
    {
        return view('editorial.create');
    }

    public static function createEditorial(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required|string|max:255'
        ]);
        Editorial::create($validate);
        return redirect()->route('editorial.inicio');
    }

    public function viewEditEditorial($id)
    {
        $editorial = Editorial::find($id);
        return view('editorial.edit', ['editorial' => $editorial]);
    }

    public static function editEditorial(Request $request, $id)
    {
        $validate = $request->validate([
            'nombre' => 'required|string|max:255'
        ]);
        $editorial = Editorial::find($id);
        $editorial->update($validate);
        return redirect()->route('editorial.inicio');
    }

    public static function deleteEditorial($id)
    {
        $editorial = Editorial::find($id);
        $editorial->delete();
        return redirect()->route('editorial.inicio');
    }

    public function viewInicioEditorial()
    {
        $editoriales = Editorial::all();
        return view('editorial.inicio', ['editoriales' => $editoriales]);
    }

    public function viewByIdEditorial($id)
    {
        $editorial = Editorial::find($id);
        return view('editorial.ver', ['editorial' => $editorial]);
    }

    public static function getEditorialById($id)
    {
        return Editorial::find($id);
    }

    public static function getLibrosByEditorial($id)
    {
        return Libro::where('editorial_id', $id)->get();
    }
}
