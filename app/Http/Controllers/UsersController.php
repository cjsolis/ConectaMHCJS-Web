<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    { 
        $usuarios = User::search()->orderBy('email')->paginate(300);
        return view('adminusuarios', compact('usuarios'));
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        
        return redirect('/admin/usuarios')->with('success', 'El usuario se ha eliminado correctamente.');
    }
}
