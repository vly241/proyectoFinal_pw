<?php

use App\antecedentes_familiares;
use App\estudiantes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class antecedentes_familiaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_est = estudiantes::where('identificacion','1112792871')->value('id');
            antecedentes_familiares::create([
                'id_est'=>$id_est,
                'descripcion'=>' infarto del corazon',
                'pariente'=>'abuelo paterno'
            ]);

        $id_est = estudiantes::where('identificacion','1112792872')->value('id');
        antecedentes_familiares::create([
            'id_est'=>$id_est,
            'descripcion'=>'diabetes',
            'pariente'=>'abuelo materno'
        ]);

        $id_est = estudiantes::where('identificacion','1112792873')->value('id');
        antecedentes_familiares::create([
            'id_est'=>$id_est,
            'descripcion'=>'no',
            'pariente'=>'no'
        ]);

        $id_est = estudiantes::where('identificacion','1112792874')->value('id');
        antecedentes_familiares::create([
            'id_est'=>$id_est,
            'descripcion'=>'hipotiroidismo',
            'pariente'=>'madre'
        ]);

        $id_est = estudiantes::where('identificacion','1112792875')->value('id');
        antecedentes_familiares::create([
            'id_est'=>$id_est,
            'descripcion'=>'no',
            'pariente'=>'no'
        ]);
    }
}
