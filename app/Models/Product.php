<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_producto'; // Indicamos tu llave primaria personalizada

    protected $fillable = [
        'identificacion', 'nombre', 'precio', 'stock', 'id_categoria'
    ];

    // Relación: Product pertenece a Category (especificando la llave foránea personalizada)
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categoria', 'id');
    }
}