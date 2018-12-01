<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_role = Role::where('name','menu')->value('id');

        User::create([
            'role_id'=>$id_role,
            'name'=>'administrador',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),

        ]);

        $id_role2 = Role::where('name','user')->value('id');
        User::create([
            'role_id'=>$id_role2,
            'name'=>'Medico',
            'email'=>'medico@medico.com',
            'password'=>bcrypt('medico'),

        ]);

    }
}
