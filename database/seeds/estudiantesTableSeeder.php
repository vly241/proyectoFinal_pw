<?php

use App\estudiantes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('estudiantes')->insert([

              ]);*/
        estudiantes::create([
            'identificacion' => '1112792871',
            'nombre' => 'jessica',
            'apellidos'=>'lopez',
            'origen'=>'null',
            'telefono'=>'3147957485',
            'direccion'=>'cr3',
            'escolaridad'=>'bachiller',
            'ocupacion'=>'estudiante',
            'edad'=>'18',
            'email'=>'jej@gmail.com'
        ]);



        estudiantes::create([
            'identificacion' => '1112792872',
            'nombre' => 'lorena',
            'apellidos'=>'lopez',
            'origen'=>'null',
            'telefono'=>'312874596',
            'direccion'=>'cr4',
            'escolaridad'=>'bachiller',
            'ocupacion'=>'estudiante',
            'edad'=>'18',
            'email'=>'lorenlop@gmail.com'

        ]);
        estudiantes::create([
            'identificacion' => '1112792873',
            'nombre' => 'carlos',
            'apellidos'=>'toro',
            'origen'=>'null',
            'telefono'=>'314796872',
            'direccion'=>'cr9',
            'escolaridad'=>'bachiller',
            'ocupacion'=>'estudiante',
            'edad'=>'18',
            'email'=>'ctoro@gmail.com'

        ]);

    }
}
