<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'identificacion',
        'nombre',
        'telefono',
        'ubicacion'
    ];
}