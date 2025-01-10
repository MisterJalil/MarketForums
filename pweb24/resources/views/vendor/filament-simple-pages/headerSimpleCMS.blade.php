<header class="text-gray-600 body-font bg-gray-200">
    <div class="container w-full mx-auto flex flex-wrap p-2 flex-col md:flex-row  justify-between items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <image src="/storage/{{ setting("site_logo") }}" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2  rounded-full" viewBox="0 0 24 24">
            </image>
            <span class="ml-3 text-xl">Curso 2024-2025</span>
        </a>
        <x-filament-menu menu='simpleCMS' />
        <div>
        @if (auth()->check())
            <a href="/logout/simpleCMS/home" onclick="return confirm('¿Salimos?');"> <p>{{ auth()->user()->name }}</p> </a>
        @else
                <a href="/login/simpleCMS/home" > <p>Login</p> </a>
        @endif
        </div>
    </div>
</header>
