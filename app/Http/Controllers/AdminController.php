<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Admin;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    //  return view('admincatalogo');
        return view('adminindex');
    }

    public function update(){
        if(Auth::guard('admin')->check()){
            $this->validate($request, [
                'contraseña'=> 'required',
            ]);
            $id = 1;
            $admin = Admin::find($id);
            $admin->password = Hash::make($request->input());
  
        
            $pieza->save();
        
        
            return redirect('/admin')->with('success','Contraseña actualizada exitosamente.');
        }else{

            return redirect('/admin/login')->with('error','Debe estar conectado como administrador para entrar.');    
        }
    }
}
