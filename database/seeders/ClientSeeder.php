<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        Client::create(['identificacion' => '1023456789', 'nombre' => 'Juan Pérez', 'telefono' => '3101234567', 'ubicacion' => 'Calle 10 # 5-23']);
        Client::create(['identificacion' => '900123456-1', 'nombre' => 'Papelería Central S.A.S.', 'telefono' => '8324455', 'ubicacion' => 'Carrera 5 # 12-45']);
        Client::create(['identificacion' => '1098765432', 'nombre' => 'María Gómez', 'telefono' => '3209876543', 'ubicacion' => 'Avenida Bolívar # 20-15']);
        Client::create(['identificacion' => '800987654-2', 'nombre' => 'Colegio San José', 'telefono' => '7412589', 'ubicacion' => 'Calle 25 # 8-30']);
        Client::create(['identificacion' => '1045678912', 'nombre' => 'Carlos Ruíz', 'telefono' => '3156781234', 'ubicacion' => 'Manzana B Casa 4']);
    }
}