<?php

use App\medico;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class medicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        medico::create([
            'identificacion'=>'1112792876',
            'nombre'=>'Diego Fernando',
            'apellido'=>'Rodriguez',
            'telefono'=>'314672845'
        ]);
    }
}
