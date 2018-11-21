<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     function test_admin()
    {
       $this->get('/admin')
           ->assertStatus(200)
           ->assertSee('Historial Medico');
    }
    function test_medico()
    {
        $this->get('/medico')
            ->assertStatus(200)
            ->assertSee('Historial Medico');
    }
}
