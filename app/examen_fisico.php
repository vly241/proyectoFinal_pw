<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examen_fisico extends Model
{
    protected $table = 'examen_fisicos';

    protected $fillable = [
       'id_est','p_cadera','p_cintura','pulso','cabeza','ojos','agudeza_visual','fondo_ojo','oidos','nariz','boca','cuello','cardiopulmonar','abdomen','piel','genitales','extrem_columna','neurologicos_pares','motor_cord_fuerza','motor_cord_tono','sensib_supe_conservado','sensib_prof_conservada','sensib_discriminativa','cutaneos','reflejos','miotacticos','patologicos','peso','talla','IMC','indice_cc'
    ];
}
