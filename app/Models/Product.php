<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'identificacion',
        'nombre',
        'precio',
        'stock',
        'id_categoria'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categoria');
    }
}