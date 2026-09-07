<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Panel de Control - Paraíso Distribuciones S.A.S.') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Banner de Bienvenida -->
            <div class="bg-white overflow-hidden shadow-md sm:rounded-xl p-6 border border-slate-200 flex items-center justify-between">
                <div>
                    <h3 class="text-2xl font-bold text-slate-800">¡Bienvenido, {{ Auth::user()->name }}!</h3>
                    <p class="text-slate-500 text-sm mt-1">Sistema ERP de Distribución de Papelería y Suministros</p>
                </div>
                <div class="hidden md:flex w-12 h-12 bg-amber-100 text-amber-600 rounded-lg items-center justify-center">
                    <i class="fas fa-store text-xl"></i>
                </div>
            </div>

            <!-- Tarjetas de Métricas KPI -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Total Productos -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 flex items-center justify-between hover:shadow-md transition">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Productos</p>
                        <p class="text-3xl font-extrabold text-slate-800 mt-1">120</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 text-blue-900 rounded-lg flex items-center justify-center text-xl">
                        <i class="fas fa-boxes"></i>
                    </div>
                </div>

                <!-- Total Clientes -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 flex items-center justify-between hover:shadow-md transition">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Clientes</p>
                        <p class="text-3xl font-extrabold text-slate-800 mt-1">45</p>
                    </div>
                    <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-lg flex items-center justify-center text-xl">
                        <i class="fas fa-users"></i>
                    </div>
                </div>

                <!-- Ventas del Día -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 flex items-center justify-between hover:shadow-md transition">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">Ventas del Día</p>
                        <p class="text-2xl font-extrabold text-slate-800 mt-1">$ 1.250.000</p>
                    </div>
                    <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-lg flex items-center justify-center text-xl">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>

                <!-- Bajo Stock -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200 flex items-center justify-between hover:shadow-md transition">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-400">Bajo Stock</p>
                        <p class="text-3xl font-extrabold text-rose-600 mt-1">5</p>
                    </div>
                    <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-lg flex items-center justify-center text-xl">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>