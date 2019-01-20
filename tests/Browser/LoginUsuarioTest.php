<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginUsuarioTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

     public function testLoginUsuarioCompletoCorrecto()//seguir el formato de test al inicio, si no no lo corre.
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('/')
                     ->clickLink('Iniciar Sesión')//presionar un link, con botones es press
                     ->type('email','pabloalicante@gmail.com')//escribe directo
                     ->type('password','password')//escribe directo
                     ->pause(5000)
                     ->press('Login')
                     ->pause(5000)
                     ->assertPathIs('/');//enlace es el correcto, todo el path
         });
     }

     public function testLoginUsuarioCompletoInCorrecto()//seguir el formato de test al inicio, si no no lo corre.
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('/')
                     ->clickLink('Iniciar Sesión')//presionar un link, con botones es press
                     ->type('email','joseq@gmail.com')//escribe directo
                     ->type('password','josar256')//escribe directo
                     ->pause(5000)
                     ->press('Login')
                     ->pause(5000)
                     ->assertSee('These credentials do not match our records.');
         });
     }
}
