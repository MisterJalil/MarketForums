<nav>
    <div class=" flex flex-wrap items-center text-base just ">

    @foreach ($menuItems->sortBy('order')  as $item)
        <a href="{{ $item['is_route']?route($item['route']): $item['url'] }}"
           @if($item['new_tab']) target="_blank" @endif
           x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
           class="text-blue-500
        fi-sidebar-item-button relative flex items-center gap-x-1 rounded-lg px-2 py-2 outline-none
      transition duration-75  hover:bg-gray-200  dark:hover:bg-white/5 dark:focus-visible:bg-white/5
      @if(url()->current() === ($item['is_route']?route($item['route']): $item['url']))
         bg-gray-100 dark:bg-white/5
      @endif
    ">
            @if(isset($item['icon']) && !empty($item['icon']))
                @if(url()->current() === ($item['is_route']?route($item['route']): $item['url']))
                    <x-icon class="fi-sidebar-item-icon w-5 h-5 text-primary-600 dark:text-primary-400" name="{{ $item['icon'] }}"></x-icon>
                @else
                    <x-icon class="fi-sidebar-item-icon w-5 h-5 text-gray-700 dark:text-gray-200" name="{{ $item['icon'] }}"></x-icon>
                @endif
            @endif
            <span class="
            fi-sidebar-item-label  truncate text-sm font-medium
            @if(url()->current() === ($item['is_route']?route($item['route']): $item['url']))
                text-primary-600 dark:text-primary-400
            @else
                text-gray-700 dark:text-gray-200
            @endif
        ">
            {{ $item['title'][app()->getLocale() ]}} &nbsp; &nbsp;
        </span>

            @if($item['has_badge'])
                <x-filament::badge :color="$item['badge_color']">
                    {{ $item['badge'][app()->getLocale()] }}
                </x-filament::badge>
            @endif
        </a>
    @endforeach
    <div>
</nav>



