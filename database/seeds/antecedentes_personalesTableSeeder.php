<?php

use App\antecedentes_personales;
use App\estudiantes;
use Illuminate\Database\Seeder;

class antecedentes_personalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a_p = estudiantes::where('identificacion','1112792873')->values('id');
        antecedentes_personales::create([

            'id_est'=>$a_p,
            'hospitalarios'=>'no' ,
            'traumaticos'=>'no',
            'psiquiatricos'=>'no',
            'transfusiones'=>'si a la edad de 14 años',
            'farmacologicos'=>'levotiroxina 50mg',
            'toxicos'=>'no',
            'quirurgicos'=>'no',
            'patologicos'=>'no',
            'gine_menarquia'=>'no',
            'gine_ciclos'=>'no',
            'gine_FUP'=>'no',
            'gine_citologicos'=>'no',
            'gine_planificacion'=>'no',

        ]);
       /* factory(antecedentes_personales::class)->create([

           'id_est'=>$a_p

        ]);
        factory(antecedentes_personales::class, 5)->create();
*/
    }

    }

