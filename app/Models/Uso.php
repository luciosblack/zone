<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    protected $table = "usos";

    protected $filable = [
        'sigla',
        'descricao',
    ];

    //relacionamentos

    public function zonas()
    {
        return $this->belongsToMany('App\Models\Zona', 'usos_zonas');
    }   
}
