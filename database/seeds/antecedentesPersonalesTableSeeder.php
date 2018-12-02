<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class antecedentesPersonalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a_p = $user = DB::table('estudiantes')->where('identificacion','1112792873')->values('id');
        DB::table('antecedentes_personales')->create([

            'id_est'=>$a_p,


        ]);
        /* $a_p2 = estudiantes::where('identificacion','1112792871')->values('id');
         antecedentes_personales::create([

             'id_est'=>$a_p2,
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

         $a_p3 = estudiantes::where('identificacion','1112792872')->values('id');
         antecedentes_personales::create([

             'id_est'=>$a_p3,
             'hospitalarios'=>'no' ,
             'traumaticos'=>'no',
             'psiquiatricos'=>'no',
             'transfusiones'=>'si a la edad de 14 años',
             'farmacologicos'=>'no',
             'toxicos'=>'no',
             'quirurgicos'=>'no',
             'patologicos'=>'no',
             'gine_menarquia'=>'no',
             'gine_ciclos'=>'no',
             'gine_FUP'=>'no',
             'gine_citologicos'=>'no',
             'gine_planificacion'=>'no',

         ]);

         $a_p4 = estudiantes::where('identificacion','1112792874')->values('id');
         antecedentes_personales::create([

             'id_est'=>$a_p4,
             'hospitalarios'=>'no' ,
             'traumaticos'=>'no',
             'psiquiatricos'=>'no',
             'transfusiones'=>'si a la edad de 14 años',
             'farmacologicos'=>'levotiroxina 50mg',
             'toxicos'=>'no',
             'quirurgicos'=>'apendendicitis',
             'patologicos'=>'no',
             'gine_menarquia'=>'no',
             'gine_ciclos'=>'no',
             'gine_FUP'=>'no',
             'gine_citologicos'=>'no',
             'gine_planificacion'=>'si, medicamento diario\'',

         ]);
         $a_p5 = estudiantes::where('identificacion','1112792875')->values('id');
         antecedentes_personales::create([

             'id_est'=>$a_p5,
             'hospitalarios'=>'no' ,
             'traumaticos'=>'no',
             'psiquiatricos'=>'no',
             'transfusiones'=>'si a la edad de 16 años',
             'farmacologicos'=>'no',
             'toxicos'=>'no',
             'quirurgicos'=>'fractura codo',
             'patologicos'=>'no',
             'gine_menarquia'=>'no',
             'gine_ciclos'=>'no',
             'gine_FUP'=>'no',
             'gine_citologicos'=>'no',
             'gine_planificacion'=>'no',

         ]);*/

    }
}
