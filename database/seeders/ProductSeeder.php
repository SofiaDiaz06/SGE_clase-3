<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create(['identificacion' => 'P1', 'nombre' => 'Cuaderno Argollado 5 Materias', 'precio' => 12500, 'stock' => 50, 'id_categoria' => 1]);
        Product::create(['identificacion' => 'P2', 'nombre' => 'Lápiz Mirado No. 2', 'precio' => 1500, 'stock' => 200, 'id_categoria' => 2]);
        Product::create(['identificacion' => 'P3', 'nombre' => 'Lapicero Negro', 'precio' => 1200, 'stock' => 150, 'id_categoria' => 2]);
        Product::create(['identificacion' => 'P4', 'nombre' => 'Carpeta de Cartón Legajador', 'precio' => 2500, 'stock' => 80, 'id_categoria' => 3]);
        Product::create(['identificacion' => 'P5', 'nombre' => 'Juego Geometría', 'precio' => 6000, 'stock' => 40, 'id_categoria' => 4]);
    }
}