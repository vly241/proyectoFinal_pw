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
            'origen'=>'colombia',
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
            'origen'=>'colombia',
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
            'origen'=>'colombia',
            'telefono'=>'314796872',
            'direccion'=>'cr9',
            'escolaridad'=>'bachiller',
            'ocupacion'=>'estudiante',
            'edad'=>'18',
            'email'=>'ctoro@gmail.com'

        ]);
        estudiantes::create([
            'identificacion' => '1112792874',
            'nombre' => 'Mariana Fernanda',
            'apellidos'=>'Guillermo',
            'origen'=>'colombia',
            'telefono'=>'3117587485',
            'direccion'=>'cll9 no 34-2',
            'escolaridad'=>'bachiller',
            'ocupacion'=>'estudiante',
            'edad'=>'24',
            'email'=>'MFgg@gmail.com'

        ]);

        estudiantes::create([
            'identificacion' => '1112792875',
            'nombre' => 'Claudio ',
            'apellidos'=>'Rodriguez',
            'origen'=>'colombia',
            'telefono'=>'3145788596',
            'direccion'=>'cr3 no.22-32',
            'escolaridad'=>'bachiller',
            'ocupacion'=>'estudiante',
            'edad'=>'25',
            'email'=>'clauR@gmail.com'

        ]);
    }
}
