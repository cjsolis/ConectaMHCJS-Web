<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
      return view('home');
    }

    public function getContactenos(){
      return view('contactenos');
    }

    public function getGaleria(){
      return view('galeria');
    }

    /* public function getNoticias(){
      return view('noticias');
    }
 */
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

    public function getTransparencia(){
      return view('transparencia');
    }

    public function getTramites(){
      return view('tramites');
    }

    public function getPregunasFrecuentes(){
      return view('preguntasfrecuentes');
    }

    public function getDenunciasQuejas(){
      return view('denunciasquejas');
    }

    public function getEnlacesAmigos(){
      return view('enlacesamigos');
    }

    public function getAcerca(){
      return view('acerca');
    }

    public function getLogin(){
      return view('logintienda');
    }

    public function getRegistrarse(){
      return view('registrarsetienda');
    }

    public function getCatalogoTienda(){
      return view('catalogotienda');
    }

    public function getReservaVisitaGuiada(){
      return view('reservavisitaguiada');
    }

  /*  public function getAdmin(){
      return view('admin');
    }*/

    public function getAdminElemQR(){
      return view('admineleqr');
    }

    public function getAdminCatalogo(){
      return view('admincatalogo');
    }

    public function getAdminFormularios(){
      return view('adminformularios');
    }

    public function getAdminGaleria(){
      return view('admingaleria');
    }

    public function getAdminNoticias(){
      return view('adminnoticias');
    }

    public function getAdminReservaciones(){
      return view('adminreservaciones');
    }

    public function getAdminServicios(){
      return view('adminservicios');
    }

    public function getAdminTramites(){
      return view('admintramites');
    }

    public function getAdminTransparencia(){
      return view('admintransparencia');
    }

    public function getAdminUsuarios(){
      return view('adminusuarios');
    }








}
