<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
   // /** @test */
    public function user_can_regsiter()
    {
        $email = rand().'qyzefa@mailinator.com';
        $this->browse(function (Browser $browser) use ($email) {
            $browser->visit('/register')
                ->assertSee('Register')
                ->type('name', '12345678')
                ->type('email', $email)
                ->type('password', '12345678')
                ->type('password_confirmation', '12345678')
                ->press('Register')
                ->assertPathIs('/home');
        });
        echo $email;
    }

    /** @test */
    public function user_can_login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->assertSee('Login')
                    ->type('email', '244847431qyzefa@mailinator.com')
                    ->type('password', '12345678')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
