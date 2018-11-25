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
        $id_est = estudiantes::where('identificacion','1112792872')->value('id');
            antecedentes_familiares::create([
                'id_est'=>$id_est,
                'descripcion'=>' infarto del corazon',
                'pariente'=>'abuelo paterno'
            ]);
    }
}
