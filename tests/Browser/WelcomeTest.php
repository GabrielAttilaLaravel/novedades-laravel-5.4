<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class WelcomeTest extends DuskTestCase
{
    function test_welcome_a_user()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome')
                // cuando escribimos en el campo nombre
                    ->type('name', 'Gabriel')
                    ->assertSee('Bienvenido, Gabriel');
        });
    }
}
