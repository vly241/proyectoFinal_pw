<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    //especifica que tabla se usa de la DB
   protected $table = 'estudiantes';

    protected $fillable = [
        'identificacion', 'nombre','apellidos','origen','telefono','direccion','escolaridad','ocupacion','edad','email','foto'
    ];
}
