<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User

class DashboardController extends Controller
{
    public function index()
    {
        // Datos de prueba para que funcionen las tarjetas y la gráfica
        $totalUsuarios = User::count();
        $usuariosHoy = User::whereDate('created_at', today())->count();
        $usuariosRecientes = User::latest()->take(5)->get();

        // Datos simulados para la gráfica de la última semana
        $fechas = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
        $cantidades = [2, 5, 3, 8, 4, 6, 9];

        return view('dashboard', compact('totalUsuarios', 'usuariosHoy', 'usuariosRecientes', 'fechas', 'cantidades'));
    }
}