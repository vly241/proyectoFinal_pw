<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Role::create([
            'name'=>'menu',
            'description'=>'Administrador',

        ]);

        Role::create([
            'name'=>'user',
            'description'=>'Medico',

        ]);
        
    }
}
