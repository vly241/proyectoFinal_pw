<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class impresion_diagnostica extends Model
{
    protected $table = 'impresion_diagnosticas';

    protected $fillable = [
        'id_est','diagnostico','plan','	paraclinicos'
    ];
}
