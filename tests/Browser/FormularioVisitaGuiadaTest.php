<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FormularioVisitaGuiadaTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */


     public function testVisitaGuiadaCorrecto()//seguir el formato de test al inicio, si no no lo corre.
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('/')
                     ->clickLink('Iniciar Sesión')//presionar un link, con botones es press
                     ->type('email','pabloalicante@gmail.com')//escribe directo
                     ->type('password','password')//escribe directo
                     ->pause(3000)
                     ->press('Login')
                     ->pause(3000)
                     ->assertPathIs('/')//hasta aqui es el login del usuario

                     ->clickLink('Servicios')
                     ->clickLink('Reserva Visita Guiada')
                     ->type('telefono_del_solicitante','88888888')//escribe directo
                     ->type('institucion_del_visitante','Colegio María Inmaculada')//escribe directo
                     ->type('cantidad_de_personas','12')//escribe directo
                     ->type('rango_de_edad','12-15')//escribe directo
                     ->type('fecha_de_visita','20/01/2019')//escribe directo
                     ->type('materialeseducativos_visitaguiada','Esta es una prueba sin mensaje de error del formulario')//escribe directo
                     ->type('necesidadesespeciales_visitaguiada','Esta es una prueba sin mensaje de error del formulario')//escribe directo
                     ->pause(5000)
                     ->press('Enviar')
                     ->assertPathIs('/')

                     ->clickLink('Pablo Alicante')
                     ->clickLink('Cerrar sesión')
                     ->assertPathIs('/');
         });
     }

     public function testVisitaGuiadaChoqueFechaInCorrecto()//seguir el formato de test al inicio, si no no lo corre.
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('/')
                     ->clickLink('Iniciar Sesión')//presionar un link, con botones es press
                     ->type('email','pabloalicante@gmail.com')//escribe directo
                     ->type('password','password')//escribe directo
                     ->pause(3000)
                     ->press('Login')
                     ->pause(3000)
                     ->assertPathIs('/')//hasta aqui es el login del usuario

                     ->clickLink('Servicios')
                     ->clickLink('Reserva Visita Guiada')
                     ->type('telefono_del_solicitante','88888888')//escribe directo
                     ->type('institucion_del_visitante','Colegio María Inmaculada')//escribe directo
                     ->type('cantidad_de_personas','12')//escribe directo
                     ->type('rango_de_edad','12-15')//escribe directo
                     ->type('fecha_de_visita','20/01/2019')//escribe directo
                     ->type('materialeseducativos_visitaguiada','Esta es una prueba sin mensaje de error del formulario')//escribe directo
                     ->type('necesidadesespeciales_visitaguiada','Esta es una prueba sin mensaje de error del formulario')//escribe directo
                     ->pause(5000)
                     ->press('Enviar')
                     ->assertSee('El campo fecha de visita ya se encuentra tomado. Seleccione otro elemento en fecha de visita.')

                     ->clickLink('Pablo Alicante')
                     ->clickLink('Cerrar sesión')
                     ->assertPathIs('/');
         });
     }

}
