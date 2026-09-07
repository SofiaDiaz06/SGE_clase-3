<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paraíso Distribuciones S.A.S. - Sistema ERP</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Carga de Vite para Laravel Breeze -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans min-h-screen flex flex-col justify-between">

    <div>
        <!-- Barra de Navegación -->
        <nav class="bg-slate-900 text-white px-6 py-4 flex justify-between items-center shadow-md">
            <div class="flex items-center space-x-3">
                <i class="fas fa-boxes text-2xl text-amber-400"></i>
                <span class="text-xl font-bold">Paraíso Distribuciones S.A.S.</span>
            </div>
            <div>
                @if (Route::has('login'))
                    <div class="space-x-3">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold px-4 py-2 rounded shadow transition">
                                <i class="fas fa-chart-line mr-1"></i> Ir al ERP
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-300 hover:text-white font-medium px-3 py-2 transition">
                                <i class="fas fa-sign-in-alt mr-1"></i> Iniciar Sesión
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold px-4 py-2 rounded shadow transition">
                                    <i class="fas fa-user-plus mr-1"></i> Registrarse
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="bg-slate-800 text-white py-16 px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-extrabold mb-4">
                    Suministros y Papelería al Por Mayor
                </h1>
                <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                    Plataforma ERP para el control centralizado de inventarios, gestión de clientes corporativos y optimización de ventas.
                </p>
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold text-lg px-6 py-3 rounded shadow transition inline-block">
                            Acceder al Panel de Control
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold text-lg px-6 py-3 rounded shadow transition inline-block">
                            Ingresar al Sistema
                        </a>
                    @endauth
                </div>
            </div>
        </header>

        <!-- Módulos Principales -->
        <section class="max-w-6xl mx-auto py-12 px-6">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-10">Módulos del Sistema</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow border border-gray-200 text-center">
                    <div class="w-14 h-14 bg-blue-100 text-blue-900 rounded-full flex items-center justify-center mx-auto mb-4 text-xl">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-800">Inventario y Productos</h3>
                    <p class="text-gray-600 text-sm">Catálogo dinámico de artículos de papelería, alertas automáticas de bajo stock y categorías.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow border border-gray-200 text-center">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-800 rounded-full flex items-center justify-center mx-auto mb-4 text-xl">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-800">Gestión de Clientes</h3>
                    <p class="text-gray-600 text-sm">Registro de clientes mayoristas, directorio de contactos y seguimiento comercial.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow border border-gray-200 text-center">
                    <div class="w-14 h-14 bg-indigo-100 text-indigo-900 rounded-full flex items-center justify-center mx-auto mb-4 text-xl">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-gray-800">Control de Ventas</h3>
                    <p class="text-gray-600 text-sm">Registro de operaciones diarias, indicadores en tiempo real e informes de facturación.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Pie de Página -->
    <footer class="bg-slate-900 text-gray-400 py-4 text-center text-sm border-t border-slate-800">
        <p>&copy; {{ date('Y') }} <strong>Paraíso Distribuciones S.A.S.</strong> - Todos los derechos reservados. | Cotecnova ERP Project</p>
    </footer>

</body>
</html>