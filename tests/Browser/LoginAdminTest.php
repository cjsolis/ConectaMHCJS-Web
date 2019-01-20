<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginAdminTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
     public function testLoginAdminCompletoCorrecto()//seguir el formato de test al inicio, si no no lo corre.
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('/admin')
                     ->type('email','admin@admin.com')//escribe directo
                     ->type('password','password')//escribe directo
                     ->pause(5000)
                     ->press('Iniciar sesión')
                     ->pause(5000)
                     ->assertPathIs('/admin');//enlace es el correcto, todo el path
         });
     }

     public function testLoginAdminCompletoInCorrecto()//seguir el formato de test al inicio, si no no lo corre.
     {
         $this->browse(function (Browser $browser) {
             $browser->visit('/admin')
                     ->type('email','stevenrojas@gmail.com')//escribe directo
                     ->type('password','stevenroj')//escribe directo
                     ->pause(5000)
                     ->press('Iniciar sesión')
                     ->pause(5000)
                     ->assertPathIs('/admin/login');//enlace es el correcto, todo el path
         });
     }
}
