<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //tablas a eliminar datos
        $this->truncateTable([
            'users',
            'estudiantes',
            'antecedentes_familiares',
            'medicos',




        ]);

        // $this->call(UsersTableSeeder::class);

             $this->call(estudiantesTableSeeder::class);
             $this->call(userTableSeeder::class);

             $this->call(antecedentes_familiaresTableSeeder::class);
             $this->call(medicoTableSeeder::class);

             $this->call(RoleTableSeeder::class);

    }

    //forma dinamica de eliminacion datos tablas
    public function truncateTable(array $table): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($table as $table){
            //elimina la tabla
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
