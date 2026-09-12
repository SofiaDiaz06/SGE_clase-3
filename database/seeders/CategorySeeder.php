<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Papelería y Cuadernos', 'description' => 'Cuadernos, bloques y papel bond', 'active' => true]);
        Category::create(['name' => 'Escritura', 'description' => 'Esferos, lápices, borradores y marcadores', 'active' => true]);
        Category::create(['name' => 'Suministros de Oficina', 'description' => 'Archivadores, grapadoras y ganchos', 'active' => true]);
        Category::create(['name' => 'Geometría y Arte', 'description' => 'Reglas, compases, pinceles y pinturas', 'active' => true]);
        Category::create(['name' => 'Tecnología Escolar', 'description' => 'Calculadoras y accesorios básicos', 'active' => true]);
    }
}