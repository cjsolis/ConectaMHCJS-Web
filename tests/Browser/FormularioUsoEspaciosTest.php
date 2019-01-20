<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FormularioUsoEspaciosTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    public function testFormularioCompletoCorrecto()//seguir el formato de test al inicio, si no no lo corre.
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tramites')
                    //->clickLink('Transparencia')//presionar un link, con botones es press
                    ->type('nombre_uso_de_espacios','Christopher Solís Castro')//escribe directo
                    ->type('correo_uso_de_espacios','cjsolis@dominio.com')//escribe directo
                    ->type('telefono_uso_de_espacios','88888888')//escribe directo
                    ->type('institucion_usoespacios','TEC')//escribe directo
                    ->type('fecha_uso_de_espacios','12/01/2019')//escribe directo
                    ->type('motivo_uso_de_espacios','Esta es una prueba sin mensaje de error del formulario')//escribe directo
                    ->pause(5000)
                    ->press('Enviar')
                    ->assertDontSee('Debe llenar los campos requeridos.');
                    //->assertPathIs('tramites');enlace es el correcto, todo el path
        });
    }

    public function testFormularioVacioMensajeErrorCorrecto()//seguir el formato de test al inicio, si no no lo corre.
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tramites')
                    ->pause(5000)
                    ->press('Enviar')
                    ->assertSee('El campo nombre uso de espacios es requerido.')
                    ->assertSee('El campo correo uso de espacios es requerido.')
                    ->assertSee('El campo telefono uso de espacios es requerido.')
                    ->assertSee('El campo fecha uso de espacios es requerido.')
                    ->assertSee('El campo motivo uso de espacios es requerido.');

        });
    }

    public function testFormularioCompletoCorreoErrorCorrecto()//seguir el formato de test al inicio, si no no lo corre.
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tramites')
                    ->type('nombre_uso_de_espacios','Stiven Rojas Chacón')//escribe directo
                    ->type('correo_uso_de_espacios','stivenrojas.com')//escribe directo
                    ->type('telefono_uso_de_espacios','88888888')//escribe directo
                    ->type('institucion_usoespacios','TEC')//escribe directo
                    ->type('fecha_uso_de_espacios','12/01/2019')//escribe directo
                    ->type('motivo_uso_de_espacios','Esta es una prueba con mensaje de error del formulario.')//escribe directo
                    ->pause(5000)
                    ->press('Enviar')
                    ->assertSee('El campo correo uso de espacios debe ser un correo electrónico válido.');


        });
    }

    public function testFormularioCompletoTelefonoErrorCorrecto()//seguir el formato de test al inicio, si no no lo corre.
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/tramites')
                    ->type('nombre_uso_de_espacios','José Roberto Madriz')//escribe directo
                    ->type('correo_uso_de_espacios','joseroberto@gmail.com')//escribe directo
                    ->type('telefono_uso_de_espacios','98ab546d')//escribe directo
                    ->type('institucion_usoespacios','UNA')//escribe directo
                    ->type('fecha_uso_de_espacios','12/01/2019')//escribe directo
                    ->type('motivo_uso_de_espacios','Esta es una prueba con mensaje de error del formulario.')//escribe directo
                    ->pause(5000)
                    ->press('Enviar')
                    ->assertSee('El campo telefono uso de espacios debe ser un número entero.')
                    ->pause(5000);


        });
    }

}
