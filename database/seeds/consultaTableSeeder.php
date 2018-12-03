<?php

use Illuminate\Database\Seeder;
use App\consulta;
use App\estudiantes;
class consultaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_est = estudiantes::where('identificacion','1112792871')->value('id');
       consulta::create([
            'id_est'=>$id_est,
            'dia'=>'12/11/2018',
            'hora'=>'11:30 a.m',
           'motivo_consulta'=>'general'
        ]);
    }
}
