<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public static function createUser(Request $request) {
        $validate = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'tipo_usuario' => 'required'
        ]);

        $usuario = Usuarios::create($validate);
        return response()->json($usuario);
    }

    public static function updateUser(Request $request) {
        $validate = $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'tipo_usuario' => 'required'
        ]);

        $usuario = Usuarios::find($request->id);
        $usuario->update($validate);
        return response()->json($usuario);
    }

    public static function deleteUser(Request $request) {
        $usuario = Usuarios::find($request->id);
        $usuario->delete();
        return response()->json($usuario);
    }

    public static function getUsers() {
        $usuarios = Usuarios::all();
        return response()->json($usuarios);
    }

    public static function getUserById(string $id) {
        $usuario = Usuarios::find($id);
        return response()->json($usuario);
    }
}
