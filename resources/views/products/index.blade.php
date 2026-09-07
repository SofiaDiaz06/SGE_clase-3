<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Módulo de Productos - Paraíso Distribuciones S.A.S.') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 border border-slate-200">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                        <i class="fas fa-plus-circle text-blue-900"></i> Formulario de Creación de Producto
                    </h3>
                </div>

                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nombre del Producto</label>
                        <input type="text" placeholder="Ej: Resma Papel Carta 75g" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-900 focus:border-blue-900 text-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Categoría</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-900 focus:border-blue-900 text-sm">
                            <option>Papelería Corporativa</option>
                            <option>Escolar y Oficina</option>
                            <option>Insumos de Impresión</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Precio Unitario ($)</label>
                        <input type="number" placeholder="18500" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-900 focus:border-blue-900 text-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Stock Inicial</label>
                        <input type="number" placeholder="100" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-900 focus:border-blue-900 text-sm">
                    </div>

                    <div class="md:col-span-2 flex justify-end gap-3 mt-4">
                        <button type="button" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 font-medium text-sm">Cancelar</button>
                        <button type="button" class="px-4 py-2 bg-blue-950 hover:bg-blue-900 text-white rounded-md font-bold text-sm shadow">
                            <i class="fas fa-save mr-1"></i> Guardar Producto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>