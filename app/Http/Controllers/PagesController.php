<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
      return view('home');
    }
    public function getAcerca(){
      return view('acerca');
    }
    public function getContactenos(){
      return view('contactenos');
    }
    public function getGaleria(){
      return view('galeria');
    }
    public function getNoticias(){
      return view('noticias');
    }
    public function getExhibicionesPermanentes(){
      return view('exhibicionespermanentes');
    }
    public function getExhibicionesTemporales(){
      return view('exhibicionestemporales');
    }
    public function getEventos(){
      return view('eventos');
    }
    public function getServicios(){
      return view('servicios');
    }
    public function getRecursos(){
      return view('recursos');
    }


}
