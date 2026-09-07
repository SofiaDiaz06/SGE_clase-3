<x-guest-layout>
    <!-- Encabezado del Formulario -->
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-slate-800">Iniciar Sesión</h2>
        <p class="text-sm text-gray-600">ERP Paraíso Distribuciones S.A.S.</p>
    </div>

    <!-- Estado de la Sesión -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Correo Electrónico -->
        <div>
            <x-input-label for="email" :value="__('Correo Electrónico')" />
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                    <i class="fas fa-envelope"></i>
                </div>
                <input id="email" 
                       class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-900 focus:border-blue-900 text-sm" 
                       type="email" 
                       name="email" 
                       :value="old('email')" 
                       required 
                       autofocus 
                       autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                    <i class="fas fa-lock"></i>
                </div>
                <input id="password" 
                       class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-900 focus:border-blue-900 text-sm" 
                       type="password" 
                       name="password" 
                       required 
                       autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Recordarme y Olvidó Contraseña -->
        <div class="block mt-4 flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-900 shadow-sm focus:ring-blue-900" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-blue-900 hover:text-blue-700 font-medium" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif
        </div>

        <!-- Botón de Ingreso -->
        <div class="mt-6">
            <button type="submit" class="w-full bg-blue-950 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-md shadow transition duration-150 ease-in-out">
                <i class="fas fa-sign-in-alt mr-2"></i> Ingresar al Sistema
            </button>
        </div>
    </form>
</x-guest-layout>