<?php

namespace App\Http\Controllers;
use Validator;
use Auth;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
      return view('adminlogin');
    }

    function checklogin(Request $request)
   {
        $this->validate($request, [
         'email'   => 'required|email',
         'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
         'email'  => $request->get('email'),
         'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))  {
         return redirect('admin/successlogin');//si se loguea, va a
        }
        else  {
         return back()->with('error', 'Datos inválidos');
        }

   }

   function successlogin() {
     return view('adminindex');
   }

   function logout() {
     Auth::logout();
     return redirect('admin');
   }
}
