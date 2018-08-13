<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = "consultas";

    protected $filable = [
        'endereco',
        'valores',
        'id',
        'validador'
    ];
}
