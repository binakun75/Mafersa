<x-template-layout>
    <x-slot name="meta_content">
        Constructora Mafersa || Empresa dedicada a getionar, ejecutar y supervisar obras publicas y privadas , ademas proporcionando suministros de agregados para la construccion
    </x-slot>
    <x-slot name="meta_keywords">
        Constructora Mafersa, empresa de construccion, constructora, tienda de materiales de construccion, agregados de construccion, maquinaria pesada
    </x-slot>
    
    <x-slot name="main">
        <div class="antialiased">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                           
                        @endauth
                    </div>
                @endif
    
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    
                        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        </div>
                    
                </div>
            </div>
        </div>
    </x-slot>
</x-template-layout>

