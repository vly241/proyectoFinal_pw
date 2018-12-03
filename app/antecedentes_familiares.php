<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentes_familiares extends Model
{
    protected $table = 'antecedentes_familiares';

    protected $fillable = [
        'id_est', 'descripcion','pariente'
    ];
}
