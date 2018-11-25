<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    function it_shows_the_users_list()
    {
        factory(User::class)->create([
            'name' => 'Joel'
        ]);
        factory(User::class)->create([
            'name' => 'Ellie',
        ]);
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Joel')
            ->assertSee('Ellie');
    }
    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/estudiantes')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados.');
    }

    /** @test */
    function it_displays_the_users_details()
    {
        $user = factory(User::class)->create([
            'name' => 'Duilio Palacios'
        ]);
        $this->get('/estudiantes/'.$user->id) // usuarios/5
        ->assertStatus(200)
            ->assertSee('Duilio Palacios');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/estudiantes/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}
