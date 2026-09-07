<nav x-data="{ open: false }" class="bg-blue-950 border-b border-blue-900 text-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-amber-400 font-bold text-lg">
                        <i class="fas fa-boxes text-xl"></i>
                        <span class="text-white hidden md:inline">Paraíso Distribuciones</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-6 sm:-my-px sm:ms-10 sm:flex items-center">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-200 hover:text-white">
                        <i class="fas fa-chart-pie mr-2"></i> {{ __('Dashboard') }}
                    </x-nav-link>
                    <a href="/productos" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-300 hover:text-white transition">
                        <i class="fas fa-box-open mr-2 text-amber-400"></i> Productos
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-300 hover:text-white transition">
                        <i class="fas fa-tags mr-2 text-amber-400"></i> Categorías
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-300 hover:text-white transition">
                        <i class="fas fa-users mr-2 text-amber-400"></i> Clientes
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-300 hover:text-white transition">
                        <i class="fas fa-shopping-cart mr-2 text-amber-400"></i> Ventas
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-200 bg-blue-900 hover:text-white focus:outline-none transition ease-in-out duration-150">
                            <i class="fas fa-user-circle text-lg mr-2 text-amber-400"></i>
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            <i class="fas fa-id-card mr-2"></i> {{ __('Perfil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="fas fa-sign-out-alt mr-2 text-red-600"></i> {{ __('Cerrar Sesión') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
