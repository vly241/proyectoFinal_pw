<?php

use Illuminate\Database\Seeder;
use App\impresion_diagnostica;
use App\estudiantes;
class diagnosticoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_est = estudiantes::where('identificacion','1112792871')->value('id');
        impresion_diagnostica::create([
            'id_est'=>$id_est,
            'diagnostico'=>'salud se encuentra bien',
            'plan'=>'',
            'paraclinicos'=>'',


        ]);
        $id_est2 = estudiantes::where('identificacion','1112792872')->value('id');
       impresion_diagnostica::create([
            'id_est'=>$id_est2,
            'diagnostico'=>'gripa',
            'plan'=>'',
            'paraclinicos'=>'',


        ]);
        $id_est3 = estudiantes::where('identificacion','1112792873')->value('id');
        impresion_diagnostica::create([
            'id_est'=>$id_est3,
            'diagnostico'=>'gripa',
            'plan'=>'medicacion buscapina',
            'paraclinicos'=>'',


        ]);
        $id_est4 = estudiantes::where('identificacion','1112792874')->value('id');
       impresion_diagnostica::create([
            'id_est'=>$id_est4,
            'diagnostico'=>'salud estable',
            'plan'=>'',
            'paraclinicos'=>'',


        ]);
        $id_est5 = estudiantes::where('identificacion','1112792875')->value('id');
      impresion_diagnostica::create([
            'id_est'=>$id_est5,
            'diagnostico'=>'dolor de estomago(colicos estomacal)',
            'plan'=>'',
            'paraclinicos'=>'',


        ]);
    }
}
