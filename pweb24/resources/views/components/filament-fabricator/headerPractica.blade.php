<!-- This example requires Tailwind CSS v2.0+ -->
<header style="background-color: rgb(252,157,6);" class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center justify-between">
        <!-- Logo y Título -->
        <div class="flex justify-start p-2 rounded-full" style="background-color: whitesmoke;">
            <a href="/">
                <img class="h-10 w-auto sm:h-14" src="/storage/logo_ulpgc_2t.svg" alt="">
                <span class="ml-2 text-xl">PWeb</span>
            </a>
        </div>
        <nav class="space-x-10 flex items-center justify-end ">
            <div class=" flex flex-wrap items-center text-base just ">
                <a href="/practicas"
                   class="text-blue-500
        fi-sidebar-item-button relative flex items-center gap-x-1 rounded-lg px-2 py-2 outline-none
      transition duration-75  hover:bg-gray-200  dark:hover:bg-white/5 dark:focus-visible:bg-white/5
          ">
                    <x-icon class="fi-sidebar-item-icon w-5 h-5 text-gray-700 dark:text-gray-200"
                            name="heroicon-m-home-modern"></x-icon>
                    <span class=" fi-sidebar-item-label  truncate text-sm font-medium
                            text-gray-700 dark:text-gray-200 ">
                      Home &nbsp; &nbsp;
                    </span>
                </a>

                <a href="/practicas/practica1"
                   x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                   class="text-blue-500
        fi-sidebar-item-button relative flex items-center gap-x-1 rounded-lg px-2 py-2 outline-none
      transition duration-75  hover:bg-gray-200  dark:hover:bg-white/5 dark:focus-visible:bg-white/5
          ">
                    <x-icon class="fi-sidebar-item-icon w-5 h-5 text-gray-700 dark:text-gray-200"
                            name="heroicon-m-beaker"></x-icon>
                    <span class="fi-sidebar-item-label  truncate text-sm font-medium
                            text-gray-700 dark:text-gray-200">
                       Practica 1 &nbsp; &nbsp;
                  </span>

                </a>
                <details class="mce-accordion">
                    <summary class="flex items-center  px-2 py-2 hover:bg-gray-200  dark:hover:bg-white/5" >
                         <x-icon class="w-5 h-5" name="heroicon-m-beaker">sdf gsdfg</x-icon>
                        <span class=" truncate text-sm font-medium text-gray-700 dark:text-gray-200"> Prácticas</span>
                    </summary>
                    <p style="text-align: left;">
                        <a href="/practicas/practica1" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  rounded-lg" role="menuitem">
                            <span >Práctica 1<span>
                        </a></p>
                    <p><a href="/practicas/practica2" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg" role="menuitem">
                            <!-- Icono de Admin Panel -->
                            Práctica 2
                        </a></p>
                </details>
                <a href="/practicas/portal"
                   x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                   class="text-blue-500
        fi-sidebar-item-button relative flex items-center gap-x-1 rounded-lg px-2 py-2 outline-none
      transition duration-75  hover:bg-gray-200  dark:hover:bg-white/5 dark:focus-visible:bg-white/5
          ">
                    <svg class="fi-sidebar-item-icon w-5 h-5 text-gray-700 dark:text-gray-200"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                         aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd"
                              d="M15 4.5A3.5 3.5 0 0 1 11.435 8c-.99-.019-2.093.132-2.7.913l-4.13 5.31a2.015 2.015 0 1 1-2.827-2.828l5.309-4.13c.78-.607.932-1.71.914-2.7L8 4.5a3.5 3.5 0 0 1 4.477-3.362c.325.094.39.497.15.736L10.6 3.902a.48.48 0 0 0-.033.653c.271.314.565.608.879.879a.48.48 0 0 0 .653-.033l2.027-2.027c.239-.24.642-.175.736.15.09.31.138.637.138.976ZM3.75 13a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                              clip-rule="evenodd"/>
                        <path
                            d="M11.5 9.5c.313 0 .62-.029.917-.084l1.962 1.962a2.121 2.121 0 0 1-3 3l-2.81-2.81 1.35-1.734c.05-.064.158-.158.426-.233.278-.078.639-.11 1.062-.102l.093.001ZM5 4l1.446 1.445a2.256 2.256 0 0 1-.047.21c-.075.268-.169.377-.233.427l-.61.474L4 5H2.655a.25.25 0 0 1-.224-.139l-1.35-2.7a.25.25 0 0 1 .047-.289l.745-.745a.25.25 0 0 1 .289-.047l2.7 1.35A.25.25 0 0 1 5 2.654V4Z"/>
                    </svg>
                    <span class="fi-sidebar-item-label  truncate text-sm font-medium
                            text-gray-700 dark:text-gray-200">
                       Portal &nbsp; &nbsp;
                    </span>

                </a>
                <a href="/home"
                   x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                   class="text-blue-500
        fi-sidebar-item-button relative flex items-center gap-x-1 rounded-lg px-2 py-2 outline-none
      transition duration-75  hover:bg-gray-200  dark:hover:bg-white/5 dark:focus-visible:bg-white/5
          ">
                    <svg class="fi-sidebar-item-icon w-5 h-5 text-gray-700 dark:text-gray-200"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                    </svg>
                    <span class="fi-sidebar-item-label  truncate text-sm font-medium
                            text-gray-700 dark:text-gray-200">
                        --Full CMS &nbsp; &nbsp;
                    </span>
                </a>

        </nav>

        <!-- Presentar el usuario o el login -->
        <div class=" items-center justify-end ">
            @if (auth()->check())
                <details class="mce-accordion">
                    <summary>   {{ auth()->user()->name }} </summary>
                    <p style="text-align: left;">
                        <a href="/logout/practicas" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas cerrar sesión?')) {
                        window.location.href = '/logout/practicas';
                    }" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                            <!-- Icono de logout -->
                            <x-icon class="w-5 h-5 text-primary-600 dark:text-primary-400"
                                    name="heroicon-c-arrow-left-start-on-rectangle"></x-icon>
                            <span>Logout<span>
                        </a></p>
                    <p><a href="/admin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                            <!-- Icono de Admin Panel -->
                            <x-icon class="w-5 h-5 text-primary-600 dark:text-primary-400"
                                    name="heroicon-c-adjustments-horizontal"></x-icon>
                            Admin Panel
                        </a></p>
                </details>
            @else
                <!-- Si el usuario no está autenticado -->
                <a href="{{ url('/login/practicas') }}"
                   class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    <i class="fa fa-btn fa-sign-in"></i> Login
                </a>
            @endif
        </div>
</header>

