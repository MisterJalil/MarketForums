<!-- This example requires Tailwind CSS v2.0+ -->
<header class="text-gray-600 body-font">
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
            @if ( auth()->check() )
            <a href="/logout/home"
               onclick="event.preventDefault();
                    if(confirm('¿Estás seguro de que deseas cerrar sesión?')) {
                        window.location.href = '/logout/home';
                    }"
               class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">{{ auth()->user()->name }}</a>
            @else
            <a href="/login" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Sign in</a>
            @endif

        </div>
    </div>
</header>

