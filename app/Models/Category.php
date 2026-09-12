<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description', 'active'
    ];

    // Relación: Category tiene muchos Productos
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}