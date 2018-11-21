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
     function test_user()
    {
       $this->get('/admin')
           ->assertStatus(200)
           ->assertSee('Historial Medico');
    }
}
