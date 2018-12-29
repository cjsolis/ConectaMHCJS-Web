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

    public function getVisitaGuiada(){
      return view('visitaguiada');
    }
    public function getServiciosEducativos(){
      return view('servicioseducativos');
    }

    public function getCampanaNacional(){
      return view('campananacional');
    }
    public function getCentroInfo(){
      return view('centroinformacion');
    }
    public function getArquitecturaMuseo(){
      return view('arquitecturamuseo');
    }
    public function getGuinos(){
      return view('guinos');
    }
    public function getCatalogo(){
      return view('catalogo');
    }


}
