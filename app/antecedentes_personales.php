<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentes_personales extends Model
{

    protected $table = 'antecedentes_personales';

    protected $fillable = [
        'id_est', 'hospitalarios','traumaticos','psiquiatricos','transfusiones','farmacologicos','toxicos','quirurgicos','patologicos','gine_menarquia','gine_ciclos','gine_FUP','gine_citologicos','gine_planificacion'
    ];

}
