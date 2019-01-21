<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        if(Auth::guard('admin')->check()){ 
            $usuarios = User::search()->orderBy('email')->paginate(300);
            return view('adminusuarios', compact('usuarios'));
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }

    public function destroy($id)
    {
        if(Auth::guard('admin')->check()){
            $usuario = User::find($id);
            $usuario->delete();
            
            return redirect('/admin/usuarios')->with('success', 'El usuario se ha eliminado correctamente.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }
}
