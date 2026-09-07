<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $primaryKey = 'id_venta';

    protected $fillable = [
        'id_cliente',
        'total'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_cliente');
    }
}