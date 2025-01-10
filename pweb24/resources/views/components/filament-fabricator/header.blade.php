<!-- This example requires Tailwind CSS v2.0+ -->
<header style="background-color: #c7e6fc;" class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="/">
                <img class="h-10 w-auto sm:h-14" src="{{  Storage::url(setting("site_logo")) }}" " alt="">
                <span class="ml-2 text-xl">PWeb</span>
            </a>
        </div>
        <nav class="space-x-10 md:flex">
            <x-filament-menu menu="CMS"/>
        </nav>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">

            @if (auth()->check())
                <details class="mce-accordion" >
                <summary>   {{ auth()->user()->name }} </summary>
                <p style="text-align: left;">
                    <a href="/logout/home"  onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas cerrar sesión?')) {
                        window.location.href = '/logout/home';
                    }"  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                     <!-- Icono de logout -->
                        <x-icon class="w-5 h-5 text-primary-600 dark:text-primary-400" name="heroicon-c-arrow-left-start-on-rectangle"></x-icon>
                        <span>Logout<span>
                    </a></p>
                    <p><a href="/admin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                            <!-- Icono de Admin Panel -->
                            <x-icon class="w-5 h-5 text-primary-600 dark:text-primary-400" name="heroicon-c-adjustments-horizontal"></x-icon>
                            Admin Panel
                        </a></p>
            </details>

            @else
                <!-- Si el usuario no está autenticado -->
                <a href="{{ url('/login/home') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    <i class="fa fa-btn fa-sign-in"></i> Login
                </a>
            @endif


        </div>
    </div>
</header>

