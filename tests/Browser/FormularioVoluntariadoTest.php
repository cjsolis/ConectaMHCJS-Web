<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FormularioVoluntariadoTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    /*public function testBasicExample()//seguir el formato de test al inicio, si no no lo corre.
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/reservavisitaguiada')
                    //->clickLink('Transparencia')//presionar un link, con botones es press

                    ->pause(1000)
                    ->assertSee('Transparencia');
                    //->assertPathIs('tramites');enlace es el correcto, todo el path
        });
    }*/

    public function testVoluntariadoCorrecto()//seguir el formato de test al inicio, si no no lo corre.
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/reservavisitaguiada')
                    //->clickLink('Transparencia')//presionar un link, con botones es press
                    ->type('rango_visitaguiada','25')//escribe directo
                    //->pause(5000)
                    //->assertSee('Transparencia')
                    //->assertDontSee('Debe llenar los campos requeridos.');
                    //->assertPathIs('tramites');enlace es el correcto, todo el path
        });
    }*/
    public function testVoluntariadoInCorrecto()//seguir el formato de test al inicio, si no no lo corre.
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/reservavisitaguiada')
                    //->clickLink('Transparencia')//presionar un link, con botones es press
                    ->type('rango_visitaguiada','25')//escribe directo
                    ->pause(5000)
                    ->press('Enviar')
                    ->assertDontSee('Debe llenar los campos requeridos.');
                    //->assertPathIs('tramites');enlace es el correcto, todo el path
        });
    }

}
