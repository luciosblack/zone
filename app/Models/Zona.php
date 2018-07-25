<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = "zonas";

    protected $filable = [
        'sigla',
        'nome',
        'testada',
        'area',
        'coeficiente_min',
        'coeficiente_bas',
        'coeficiente_max',
        'afastamento',
        'tx_ocupacao',
        'tx_permeabilidade',
        'vagas_estacionamento',
    ];

    //relacionamentos

    public function usos()
    {
        return $this->belongsToMany('App\Models\Uso', 'usos_zonas')->withPivot('uso');
    }   
}
