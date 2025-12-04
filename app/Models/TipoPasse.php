<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPasse extends Model
{
     protected $table = 'tipo_passes';

    protected $fillable = [
        'descricao',
        'estado',
        'codigo',
    ];
}
