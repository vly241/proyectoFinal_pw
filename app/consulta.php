<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consulta extends Model
{
    protected $table = 'consultas';

    protected $fillable = [
        'id_est','dia','hora','motivo_consulta'
    ];
}
